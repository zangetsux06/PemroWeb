const weatherData = {
  // Sumatera
  Medan: { temperature: 31, condition: "Berawan" },
  Palembang: { temperature: 33, condition: "Panas Terik" },

  // Jawa
  Jakarta: { temperature: 30, condition: "Cerah" },
  Bandung: { temperature: 25, condition: "Hujan Ringan" },
  Surabaya: { temperature: 33, condition: "Panas Terik" },
  Yogyakarta: { temperature: 29, condition: "Berawan" },

  // Kalimantan
  Pontianak: { temperature: 32, condition: "Hujan Ringan" },
  Balikpapan: { temperature: 30, condition: "Berawan" },
  Banjarmasin: { temperature: 33, condition: "Panas Terik" },
  Samarinda: { temperature: 34, condition: "Panas Terik" },

  // Sulawesi
  Makassar: { temperature: 32, condition: "Cerah" },
  Manado: { temperature: 28, condition: "Hujan Ringan" },

  // Bali & Nusa Tenggara
  Denpasar: { temperature: 31, condition: "Cerah" },

  // Maluku & Papua
  Jayapura: { temperature: 30, condition: "Cerah" },
  Ambon: { temperature: 28, condition: "Hujan Ringan" },
};

// Fungsi untuk mendapatkan icon cuaca
function getWeatherIcon(condition) {
  const lowerCondition = condition.toLowerCase();
  if (lowerCondition.includes("cerah") || lowerCondition.includes("panas")) {
    return "☀️";
  } else if (lowerCondition.includes("hujan")) {
    return "🌧️";
  } else if (lowerCondition.includes("mendung")) {
    return "☁️";
  } else if (lowerCondition.includes("sejuk")) {
    return "🌤️";
  } else {
    return "⛅";
  }
}

// Fungsi untuk mendapatkan semua nama kota
function getAllCities() {
  return Object.keys(weatherData).sort();
}

// Fungsi untuk mencari cuaca kota
function getCityWeather(cityName) {
  const normalizedCity = Object.keys(weatherData).find(
    (city) => city.toLowerCase() === cityName.toLowerCase()
  );
  return normalizedCity ? weatherData[normalizedCity] : null;
}

// Fungsi untuk mendapatkan tema warna berdasarkan kondisi
function getWeatherTheme(condition) {
  const lowerCondition = condition.toLowerCase();
  if (lowerCondition.includes("sejuk") || lowerCondition === "dingin") {
    return "weather-cool";
  } else if (
    lowerCondition.includes("panas") ||
    lowerCondition.includes("terik")
  ) {
    return "weather-hot";
  } else if (lowerCondition.includes("cerah")) {
    return "weather-sunny";
  } else if (lowerCondition.includes("hujan")) {
    return "weather-rainy";
  } else if (
    lowerCondition.includes("mendung") ||
    lowerCondition.includes("berawan")
  ) {
    return "weather-cloudy";
  }
  return "weather-default";
}

// DOM Elements
const cityInput = document.getElementById("city-input");
const suggestionsDiv = document.getElementById("suggestions");
const showWeatherBtn = document.getElementById("show-weather-btn");
const cityExamplesDiv = document.getElementById("city-examples");
const weatherResultDiv = document.getElementById("weather-result");
const weatherIconLarge = document.getElementById("weather-icon-large");
const weatherCityEl = document.getElementById("weather-city");
const weatherTempEl = document.getElementById("weather-temp");
const weatherConditionEl = document.getElementById("weather-condition");

// Event Listeners
cityInput.addEventListener("input", handleInputChange);
cityInput.addEventListener("focus", handleInputFocus);
showWeatherBtn.addEventListener("click", handleShowWeather);
document.addEventListener("click", (e) => {
  if (!e.target.closest(".relative")) {
    suggestionsDiv.classList.add("hidden");
  }
});

// Handle input change untuk autocomplete
function handleInputChange(e) {
  const value = e.target.value;
  if (value.length > 0) {
    const allCities = getAllCities();
    const filtered = allCities.filter((city) =>
      city.toLowerCase().includes(value.toLowerCase())
    );
    showSuggestions(filtered);
  } else {
    suggestionsDiv.classList.add("hidden");
  }
}

// Handle input focus
function handleInputFocus() {
  if (cityInput.value.length > 0) {
    handleInputChange({ target: cityInput });
  }
}

// Menampilkan suggestions
function showSuggestions(cities) {
  if (cities.length === 0) {
    suggestionsDiv.classList.add("hidden");
    return;
  }
  suggestionsDiv.innerHTML = "";
  cities.forEach((city) => {
    const button = document.createElement("button");
    button.className =
      "w-full px-4 py-2 text-left text-sm text-slate-700 hover:bg-cyan-500/10 transition-colors";
    button.textContent = city;
    button.addEventListener("click", () => selectCity(city));
    suggestionsDiv.appendChild(button);
  });
  suggestionsDiv.classList.remove("hidden");
}

// Memilih kota dari suggestions
function selectCity(city) {
  cityInput.value = city;
  suggestionsDiv.classList.add("hidden");
  handleShowWeather();
}

// Menampilkan cuaca di console dan UI
function handleShowWeather() {
  const cityName = cityInput.value.trim();
  if (!cityName) {
    console.log("⚠️ Mohon masukkan nama kota!");
    weatherResultDiv.classList.add("hidden");
    document.body.className =
      "weather-default flex items-center justify-center min-h-screen p-4 transition-all duration-500";
    return;
  }
  const weather = getCityWeather(cityName);
  if (weather) {
    console.log(`\n🌤️ Cuaca di ${cityName}:`);
    console.log(`🌡️ Suhu: ${weather.temperature}°C`);
    console.log(`☁️ Kondisi: ${weather.condition}\n`);
    weatherIconLarge.textContent = getWeatherIcon(weather.condition);
    weatherCityEl.textContent = cityName;
    weatherTempEl.textContent = `${weather.temperature}°C`;
    weatherConditionEl.textContent = weather.condition;
    weatherResultDiv.classList.remove("hidden");
    const theme = getWeatherTheme(weather.condition);
    document.body.className = `${theme} flex items-center justify-center min-h-screen p-4 transition-all duration-500`;
  } else {
    console.log(`\n❌ Kota "${cityName}" tidak ditemukan dalam database.`);
    console.log(
      `💡 Coba kota lain seperti: Jakarta, Bandung, Surabaya, dll.\n`
    );
    weatherResultDiv.classList.add("hidden");
    document.body.className =
      "weather-default flex items-center justify-center min-h-screen p-4 transition-all duration-500";
  }
}

// Inisialisasi contoh kota
function initializeCityExamples() {
  const exampleCities = ["Jakarta", "Bandung", "Surabaya", "Medan", "Makassar"];
  exampleCities.forEach((city) => {
    const weather = getCityWeather(city);
    if (!weather) return;
    const button = document.createElement("button");
    button.className =
      "city-tag px-3 py-1.5 bg-cyan-500/10 rounded-full text-xs font-medium text-cyan-800 hover:bg-cyan-500/20 hover:scale-105 transition-all inline-flex items-center gap-1.5";
    const icon = document.createElement("span");
    icon.textContent = getWeatherIcon(weather.condition);
    const text = document.createTextNode(city);
    button.appendChild(icon);
    button.appendChild(text);
    button.addEventListener("click", () => selectCity(city));
    cityExamplesDiv.appendChild(button);
  });
}

// inisialisasi saat halaman dimuat
initializeCityExamples();

// Tambahkan event listener untuk Enter key
cityInput.addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    handleShowWeather();
    suggestionsDiv.classList.add("hidden");
  }
});
