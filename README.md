# 💸 Budget Tracker – Web-App zur Finanzverwaltung

Ein benutzerfreundliches PHP-Projekt zur Erfassung, Kategorisierung und Analyse persönlicher Ausgaben und Einnahmen.  
Ideal als Lernprojekt für Webentwicklung, Datenbankarbeit und grundlegende Finanzanalyse.

---

## 📌 Hauptfunktionen

✅ **Transaktionen erfassen**  
Füge Einnahmen oder Ausgaben mit Datum, Betrag, Art, Kategorie und Beschreibung hinzu.

📁 **Kategorien & Typen verwalten**  
Wähle bei jeder Transaktion eine passende Kategorie und Art (z. B. „Einnahme“ oder „Ausgabe“).

📊 **Tabelle mit allen Einträgen**  
Die gespeicherten Transaktionen werden in einer optisch strukturierten Tabelle dargestellt.

📈 **Analysefunktion (in Entwicklung)**  
Eigene Seite zur Auswertung deiner Finanzen (z. B. Filter, Diagramme etc.).

👤 **Benutzerprofil & Session-Login**  
Nur eingeloggte Nutzer:innen haben Zugriff auf die App. Sessions werden per `$_SESSION` kontrolliert.

🚪 **Logout-Funktion**  
Beendet die Session und leitet zur Startseite weiter.

---

## 📸 Screenshot

![image](https://github.com/user-attachments/assets/8a3ae3f9-eb2e-493a-a811-7e2670d9b096)

---

## 🛠️ Verwendete Technologien

| Technologie | Beschreibung |
|------------|--------------|
| PHP        | Backend-Logik, Session-Management, Datenbankzugriffe |
| MySQL      | Speicherung der Transaktionen, Kategorien und Nutzerinformationen |
| HTML/CSS   | Struktur und Gestaltung der Oberfläche |
| JavaScript | Dynamisches Nachladen der Kategorien (via `script.js`) |

---

## 🗃️ Projektstruktur

```text
projectBudget/
├── index.php           # Login-Seite
├── transaktion.php     # Formular zur Transaktionserfassung (dieser Code)
├── analis.php          # Seite zur Analyse (nicht enthalten)
├── profil.php          # Nutzerprofil
├── aus.php             # Logout (Session-Ende)
├── projekt.php         # PHP-Backend zur Verarbeitung von Formulardaten
├── script.js           # JS für dynamische UI (z. B. Kategorien laden)
├── style/
│   └── style.css       # Hauptstylesheet
└── README.md           # Dieses Dokument

