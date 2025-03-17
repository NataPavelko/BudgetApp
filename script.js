document.addEventListener("DOMContentLoaded", function () {
  const artSelect = document.getElementById("type");
  const kategorieSelect = document.getElementById("kategorie");

  const einnahmeKategorien = {
    1: "Gehalt",
    2: "Geschenke",
    3: "Investitionen",
  };

  const ausgabeKategorien = {
    4: "Miete",
    5: "Lebensmittel",
    6: "Unterhaltung",
    0: "Reisen",
    8: "Restaurants",
    7: "Lieferdienste",
    9: "Kleidung",
    10: "Transport",
  };

  function updateKategorien() {
    const selectedArt = artSelect.value;
    let options = {};

    if (selectedArt === "einnahme") {
      options = einnahmeKategorien;
    } else if (selectedArt === "ausgabe") {
      options = ausgabeKategorien;
    }

    kategorieSelect.innerHTML = "";

    for (const key in options) {
      const option = document.createElement("option");
      option.value = key;
      option.textContent = options[key];
      kategorieSelect.appendChild(option);
    }
  }

  artSelect.addEventListener("change", updateKategorien);

  updateKategorien();
});
