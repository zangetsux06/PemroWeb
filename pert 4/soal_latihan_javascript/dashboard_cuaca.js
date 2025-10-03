// Data cuaca untuk kota-kota di Indonesia
const weatherData = {
  // Sumatera
  "Banda Aceh": { temperature: 29, condition: "Cerah" },
  Medan: { temperature: 31, condition: "Berawan" },
  Padang: { temperature: 28, condition: "Hujan Ringan" },
  Pekanbaru: { temperature: 32, condition: "Cerah" },
  Jambi: { temperature: 30, condition: "Berawan" },
  Palembang: { temperature: 33, condition: "Panas Terik" },
  Bengkulu: { temperature: 27, condition: "Hujan Ringan" },
  "Bandar Lampung": { temperature: 31, condition: "Cerah" },

  // Jawa
  Jakarta: { temperature: 30, condition: "Cerah" },
  Bogor: { temperature: 26, condition: "Hujan Ringan" },
  Depok: { temperature: 29, condition: "Berawan" },
  Tangerang: { temperature: 31, condition: "Cerah" },
  Bekasi: { temperature: 30, condition: "Berawan" },
  Bandung: { temperature: 25, condition: "Hujan Ringan" },
  Cirebon: { temperature: 32, condition: "Panas Terik" },
  Semarang: { temperature: 31, condition: "Cerah" },
  Yogyakarta: { temperature: 29, condition: "Berawan" },
  Solo: { temperature: 30, condition: "Cerah" },
  Surabaya: { temperature: 33, condition: "Panas Terik" },
  Malang: { temperature: 24, condition: "Sejuk" },
  Banyuwangi: { temperature: 28, condition: "Berawan" },

  // Kalimantan
  Pontianak: { temperature: 32, condition: "Hujan Ringan" },
  Palangkaraya: { temperature: 31, condition: "Berawan" },
  Banjarmasin: { temperature: 33, condition: "Panas Terik" },
  Samarinda: { temperature: 28, condition: "Mendung" },
  Balikpapan: { temperature: 30, condition: "Berawan" },
  Tarakan: { temperature: 29, condition: "Cerah" },

  // Sulawesi
  Manado: { temperature: 28, condition: "Hujan Ringan" },
  Gorontalo: { temperature: 30, condition: "Cerah" },
  Palu: { temperature: 31, condition: "Panas Terik" },
  Makassar: { temperature: 32, condition: "Cerah" },
  Kendari: { temperature: 29, condition: "Berawan" },

  // Bali & Nusa Tenggara
  Denpasar: { temperature: 31, condition: "Cerah" },
  Mataram: { temperature: 30, condition: "Berawan" },
  Kupang: { temperature: 33, condition: "Panas Terik" },

  // Maluku & Papua
  Ambon: { temperature: 28, condition: "Hujan Ringan" },
  Ternate: { temperature: 29, condition: "Berawan" },
  Jayapura: { temperature: 30, condition: "Cerah" },
  Sorong: { temperature: 31, condition: "Berawan" },
  Manokwari: { temperature: 29, condition: "Hujan Ringan" },
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
  } else if (lowerCondition.includes("mendung")) {
    return "weather-cloudy";
  } else if (lowerCondition.includes("berawan")) {
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

// Menutup suggestions jika klik di luar
document.addEventListener("click", (e) => {
  if (!e.target.closest(".input-section")) {
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
    button.className = "suggestion-item";
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
}

// Menampilkan cuaca di console dan UI
function handleShowWeather() {
  const cityName = cityInput.value.trim();

  if (!cityName) {
    console.log("⚠️ Mohon masukkan nama kota!");
    weatherResultDiv.classList.add("hidden");
    document.body.className = "weather-default";
    return;
  }

  const weather = getCityWeather(cityName);

  if (weather) {
    // Output ke console (sesuai tugas)
    console.log(`\n🌤️ Cuaca di ${cityName}:`);
    console.log(`🌡️ Suhu: ${weather.temperature}°C`);
    console.log(`☁️ Kondisi: ${weather.condition}\n`);

    // Tampilkan di UI
    weatherIconLarge.textContent = getWeatherIcon(weather.condition);
    weatherCityEl.textContent = cityName;
    weatherTempEl.textContent = `${weather.temperature}°C`;
    weatherConditionEl.textContent = weather.condition;
    weatherResultDiv.classList.remove("hidden");

    // Ubah background sesuai cuaca
    const theme = getWeatherTheme(weather.condition);
    document.body.className = theme;
  } else {
    console.log(`\n❌ Kota "${cityName}" tidak ditemukan dalam database.`);
    console.log(
      `💡 Coba kota lain seperti: Jakarta, Bandung, Surabaya, dll.\n`
    );
    weatherResultDiv.classList.add("hidden");
    document.body.className = "weather-default";
  }
}

// Inisialisasi contoh kota
function initializeCityExamples() {
  const exampleCities = ["Jakarta", "Bandung", "Surabaya", "Medan"];

  exampleCities.forEach((city) => {
    const weather = getCityWeather(city);
    const button = document.createElement("button");
    button.className = "city-tag";

    const icon = document.createElement("span");
    icon.className = "weather-icon";
    icon.textContent = getWeatherIcon(weather.condition);

    const text = document.createTextNode(city);

    button.appendChild(icon);
    button.appendChild(text);
    button.addEventListener("click", () => selectCity(city));

    cityExamplesDiv.appendChild(button);
  });
}

// Jalankan inisialisasi saat halaman dimuat
initializeCityExamples();

// Tambahkan event listener untuk Enter key
cityInput.addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    handleShowWeather();
  }
});
