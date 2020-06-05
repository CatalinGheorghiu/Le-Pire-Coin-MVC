<?php require APP_ROOT . '/views/include/header.php'; ?>

<div id="content" class='flex flex-col flex-auto bg-grey-lighter'>

    <div class="flex-grow container mx-auto p-4 ">
        <!-- Card -->
        <div class="my-8 mx-auto shadow-lg  px-10 xl:w-3/4">
            <h1 class="text-5xl text-center  "><?= $data['post']->title; ?></h1>
            <!-- Images -->
            <div class="w-full sm:w-5/6 lg:w-7/12 mx-auto my-6">
                <!-- Main Image -->
                <img alt="ecommerce" class="w-full h-auto object-cover object-center rounded" src="https://dummyimage.com/400x400">
            </div>

            <!-- <div class="w-1/2 mx-auto">
                <img alt="ecommerce" class="mx-auto xl:w-3/5 lg:w-5/6 md:w-11/12 sm:w-64 h-auto object-cover object-center rounded" src="https://dummyimage.com/400x400">
            </div> -->


            <div class="py-8 flex flex-wrap md:flex-no-wrap ">
                <!-- Content -->
                <div class="md:flex-grow w-full">
                    <!-- Price -->
                    <p class="leading-relaxed flex justify-between mb-3 "><span class="italic"><i class="fas fa-hand-holding-usd text-green-500"></i> Price: </span> <span class=" text-xl font-bold"><?= $data['post']->price; ?> €</span></p>
                    <!-- Location -->
                    <p class="leading-relaxed flex justify-between mb-3"> <span class="italic mr-10"><i class="fas fa-map-marked-alt text-green-500"></i> Location: </span> <?= $data['post']->location; ?></p>
                    <hr class="my-3">
                    <!-- Mileage -->
                    <p class="leading-relaxed flex justify-between mb-3"> <span class="italic mr-10"><i class="fas fa-route text-green-500"></i> Mileage: </span> <?= $data['post']->mileage; ?> Km</p>
                    <!-- Registration date -->
                    <p class="leading-relaxed flex justify-between mb-3"> <span class="italic mr-10"><i class="far fa-calendar-alt text-green-500"></i> First registration: </span> <?= $data['post']->registration_date; ?></p>
                    <!-- Cubic capacity -->
                    <p class="leading-relaxed flex justify-between mb-3"> <span class="italic mr-10"><i class="fas fa-horse text-green-500"></i> Cubic Capacity: </span> <?= $data['post']->cubic_capacity; ?> ccm</p>
                    <!-- Power -->
                    <p class="leading-relaxed flex justify-between mb-3"> <span class="italic mr-10"><i class="fas fa-fighter-jet text-green-500"></i> Power: </span> <?= $data['post']->power; ?> kW</p>
                    <!-- Fuel -->
                    <p class="leading-relaxed flex justify-between mb-3"> <span class="italic mr-10"><i class="fas fa-gas-pump text-green-500"></i> Fuel: </span> <?= $data['post']->fuel; ?></p>
                </div>
            </div>
            <!-- Details -->
            <div>
                <h2 class="underline mb-10 font-bold">Vehicle Description</h2>
                <p class="pb-10">
                    Volvo XC60 B4 D AWD Geartronic Inscription 197PS, direkt von Ihrem Volvo-Vertragspartner <br>

                    Media & Sound-Paket<br>
                    Digitaler Radioempfang (DAB+)<br>
                    Steckdose 230 Volt<br>
                    Infotainmentsystem Sensus Connect mit HIGH PERFORMANCE SOUND PRO by Harman/Kardon<br>
                    Parkassistenz-Paket<br>
                    Einparkhilfe vorne und hinten<br>
                    Rückfahrkamera<br>
                    Licht-Paket<br>
                    LED-Nebelscheinwerfer (im Frontspoiler integriert)<br>
                    Scheinwerferreinigungsanlage<br>
                    LED-Scheinwerfer "Thors Hammer" Active High Beam<br>
                    IntelliSafe Pro-Paket<br>
                    Pilot Assist<br>
                    IntelliSafe Surround<br>
                    Xenium-Paket<br>
                    Klimaautomatik mit 4-Zonen-Temperaturregelung<br>
                    Panorama Glas-Schiebedach mit Hebefunktion<br>
                    Head-up-Display<br>
                    Winter-Paket<br>
                    Sitzheizung vorn<br>
                    Wischerblätter und Scheibenwaschdüsen beheizt<br>
                    Laderaum-Paket Pro<br>
                    Kindersicherung für die hinteren Türen (elektrisch)<br>
                    Kopfstützen hinten umklappbar (elektrisch)<br>
                    Handschuhfach abschließbar<br>
                    Keyless Drive<br>
                    Parkkamera mit 360° Surround View<br>
                    Seiten- und Heckfenster abgedunkelt<br>
                    Sport-Lederlenkrad<br>
                    CD-Player<br>
                    Park Assist Pilot (intelligenter Einparkassistent)<br>
                    <br>
                    Airbag Fahrer- und Beifahrerseite<br>
                    Airbag<br>
                    Knieairbag für Fahrer<br>
                    Airbag<br>
                    Seitenairbag v.<br>
                    Kopf/Schul. v+h<br>
                    ABS<br>
                    Getriebe: 8-Stufen-Automatik(Geartronic)<br>
                    Außentemperaturanzeige<br>
                    Berganfahrassistent Hill Start Assist<br>
                    Dachreling aus Aluminium (integriert)<br>
                    Digitale Instrumentierung<br>
                    ESC- Fahrdynamikregelung
                    Räder: LM 19"-10-Speichen-Design<br>
                    Fensterheber elektrisch vorn und hinten<br>
                    Beschlagsensor mit Defrosterfunktion<br>
                    Heckscheibenwischer m. Intervall<br>
                    ISOFIX-Aufnahme für die äußeren Rücksit.<br>
                    Klimaautomatik 2-Zonen<br>
                    Sitze: Lendenwirbelstütze 2-Wege einst.<br>
                    Lenkrad: Lederlenkrad im 3-Speichen-Desi<br>
                    Navigationssystem Sensus<br>
                    Polsterung: Leder Komfortsitze<br>
                    Regensensor<br>
                    Außenspiegel el. verstell.- u. beheizbar<br>
                    Außenspiegel elektrisch anklappbar<br>
                    Servolenkung geschwindigkeitsabhängig<br>
                    Airbag Beifahrerseite abschaltbar<br>
                    Blinkleuchten in Außenspiegel integriert<br>
                    CleanZone Luftqualitätssystem<br>
                    IDIS - Intelligentes Fahrerinformationss<br>
                    Reifendruckkontrollsystem<br>
                    Steckdosen 12-Volt-Anschluss vorn/hinten<br>
                    Allradantrieb (AWD)<br>
                    Bergabfahrhilfe HDC<br>
                    Bremsassistent<br>
                    City Safety<br>
                    Räder: Reifendichtmittel<br>
                    Einstiegsleisten aus Aluminium v.<br>
                    Gepäckraum-Trennnetz<br>
                    Laderraumrollo<br>
                    Lederschalthebel<br>
                    Lenkrad höhen- und längseinstellbar<br>
                    Make-up-Spiegel<br>
                    beleuchtet<br>
                    Mittelarmlehne hinten (klappbar)<br>
                    Mittelarmlehne vorn mit integ.Staufach<br>
                    Parkbremse (elektrisch)<br>
                    Rücksitze umlegbar<br>
                    Sitz: Fahrer-/Beifahrer höhenverstellbar<br>
                    Sitze: Beinauflage elek. einstell. vorne<br>
                    Sitze: Lendenwirbelstütze 4-Wege elektr.<br>
                    Verzurrösen im Gepäckraum (klappbar)<br>
                    WHIPS Schleudertrauma-Schutzsystem<br>
                    Auspuffanlage mit zwei verchr.Endrohren<br>
                    Chromapplikationen<br>
                    Dachkantenspoiler<br>
                    Kindersicherung (Türen hinten)<br>
                    Ladekantenschutz im Gepäckraum aus Edels<br>
                    Dieselpartikelfilter<br>
                    Volvo On Call mit WLAN-Hotspot<br>
                    Festbremsautomatik<br>
                    Road Sign Information-Verkehrszeichnerk.<br>
                    Geschwindigkeitsregelanlage (GRA)<br>
                    Wegfahrsperre<br>
                    Zentralverriegelung mit Funkferbedienung<br>
                </p>
            </div>
            <div class=" pb-10">
                <!-- Button BACK -->
                <?php if (isLoggedIn()) : ?>
                    <a class=" leading-tight bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white align-middle py-2 px-4 border border-green-500 hover:border-transparent rounded cursor-pointer" href="<?= URL_ROOT; ?>/posts/dashboard">
                        <i class="fas fa-long-arrow-alt-left  mr-4 "></i> Back
                    </a>
                <?php else : ?>
                    <a class="text-green-500 inline-flex items-center mt-4" href="<?= URL_ROOT; ?>">Back
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>






<?php require APP_ROOT . '/views/include/footer.php'; ?>