# PHP_Sprintas_5
Asmeninė svetainė (landing page) sukurta Laravel framework'o pagalba
Už pagrindą paimtas html šablonas (template) ir pilnai perdarytas naudojant laravel.
Realizuota:
- pradinio  html kodo suskaidymas į atskiras dalis/php failus tolimesniam jų konfigūravimui/apjungimui ir atvaizdavimui.
- pilnas laravel modeliavimas (išskyrus e-mail konfigūravimą/pranešimų išsiuntimą dėl saugumo talpinant github)
  . susikurtos, apsirašytos ir atliktos migracijos (kuriant lenteles DB).
  . apsirašyti route.
  . susikurti ir apsirašyti kontroleriai su veiksmų metodais
  . sukurti, apsirašyti ir tinkamai nuorodomis apjungti visi resource/views *.php failai
  - administratoriaus autentifikacija; palikta galimybė registruotis/jungtis naujam vartotojui (realiame projekte bus panaikinta).
  - administratoriaus aplinka sukuriant visus būtinus puslapius svetainės turiniui redaguoti (crud funkcionalas).
  
  Darbe panaudota:
  - laravelcollective/html
  - CKEditor funkcionalas (https://ckeditor.com) redaguojamo turinio automatiniam stilizavimui
  
  
  Pridedama duomenų bazė 'landpage'. Esantis bazėje vartotojas gali jungtis kaip 'mb@pastas.com' su slaptažodžiu '123456789'.
  Prieš paleidžiant būtina composer'io instaliacija (vendor katalogas, etc.)
  Realiai veikianti svetainė patalpinta http://donatas.space

