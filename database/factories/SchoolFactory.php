<?php

$factory->define(App\School::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement([
            'A-H-S-T-W',
            'A-H-S-T-W 9TH',
            'AC/GC SCHOOLS',
            'ADM',
            'ADM 9TH',
            'AGWSR',
            'AGWSR 9TH',
            'AKRON-WESTFIELD',
            'AKRON-WESTFIELD 9TH',
            'ALBIA',
            'ALGONA',
            'ALGONA 9TH',
            'ALTA-AURELIA',
            'ALTA-AURELIA 9TH',
            'AMES',
            'AMES 9TH',
            'ANAMOSA',
            'ANKENY',
            'ANKENY 9TH',
            'ANKENY CENTENNIAL',
            'ANKENY CENTENNIAL 9TH',
            'APLINGTON-PARKERSBURG',
            'APLINGTON-PARKERSBURG 9TH',
            'AR-WE-VA',
            'ATLANTIC',
            'AUDUBON',
            'BALLARD',
            'BALLARD 9TH',
            'BAXTER',
            'BCLUW',
            'BCLUW 9TH',
            'BELLE PLAINE',
            'BELLEVUE COMMUNITY',
            'BELMOND-KLEMME',
            'BELMOND-KLEMME 9TH',
            'BENTON COMMUNITY',
            'BGM',
            'BISHOP GARRIGAN',
            'BISHOP GARRIGAN 9TH',
            'BONDURANT-FARRAR',
            'BOONE',
            'BOONE 9TH',
            'BOYDEN-HULL',
            'BOYDEN-HULL 9TH',
            'BOYER VALLEY',
            'CAL COMMUNITY',
            'CALAMUS-WHEATLAND',
            'CAM',
            'CAM 9TH',
            'CAMANCHE',
            'CAMANCHE 9TH',
            'CARDINAL',
            'CARLISLE',
            'CARROLL',
            'CARROLL 9TH',
            'CASCADE',
            'CASCADE 9TH',
            'CEDAR FALLS',
            'CEDAR FALLS 9TH',
            'CEDAR RAPIDS KENNEDY',
            'CEDAR RAPIDS KENNEDY 9TH',
            'CEDAR RAPIDS METRO',
            'CEDAR RAPIDS METRO 9TH',
            'CEDAR RAPIDS PRAIRIE',
            'CEDAR RAPIDS PRAIRIE 9TH',
            'CEDAR RAPIDS WASHINGTON',
            'CEDAR RAPIDS WASHINGTON 9TH',
            'CEDAR RAPIDS XAVIER',
            'CEDAR RAPIDS XAVIER 9TH',
            'CENTERVILLE',
            'CENTERVILLE 9TH',
            'CENTRAL DEWITT',
            'CENTRAL DEWITT 9TH',
            'CENTRAL ELKADER',
            'CENTRAL LYON',
            'CENTRAL LYON 9TH',
            'CHARTER OAK-UTE',
            'CHEROKEE WASHINGTON',
            'CHEROKEE WASHINGTON 9TH',
            'CLARION-GOLDFIELD-DOWS',
            'CLARION-GOLDFIELD-DOWS 9TH',
            'CLARKE COMMUNITY',
            'CLARKSVILLE',
            'CLAY CENTRAL-EVERLY',
            'CLAY CENTRAL-EVERLY 9TH',
            'CLAYTON RIDGE',
            'CLEAR LAKE',
            'COLLINS-MAXWELL',
            'COLLINS-MAXWELL 9TH',
            'COLO-NESCO',
            'COLUMBUS COMMUNITY',
            'COON RAPIDS-BAYARD',
            'COUNCIL BLUFFS ABRAHAM LINCOLN',
            'COUNCIL BLUFFS THOMAS JEFFERSON',
            'CRESTON',
            'CRESTON 9TH',
            'CRESTWOOD',
            'CRESTWOOD 9TH',
            'DALLAS CENTER-GRIMES',
            'DALLAS CENTER-GRIMES 9TH',
            'DANVILLE',
            'DAVIS COUNTY',
            'DECORAH',
            'DECORAH 9TH',
            'DENISON',
            'DENISON 9TH',
            'DENVER',
            'DES MOINES EAST',
            'DES MOINES EAST 9TH',
            'DES MOINES HOOVER',
            'DES MOINES ROOSEVELT',
            'DES MOINES ROOSEVELT 9TH',
            'DIAGONAL',
            'DIKE-NEW HARTFORD',
            'DON BOSCO',
            'DOWLING CATHOLIC',
            'DOWLING CATHOLIC 9TH',
            'DUBUQUE HEMPSTEAD',
            'DUBUQUE SENIOR',
            'DUBUQUE SENIOR 9TH',
            'DUNKERTON',
            'EAGLE GROVE',
            'EAST MARSHALL',
            'EAST MILLS',
            'EAST SAC COUNTY',
            'EAST SAC COUNTY 9TH',
            'EAST UNION',
            'EASTON VALLEY',
            'EDDYVILLE-BLAKESBURG-FREMONT',
            'EMMETSBURG',
            'ENGLISH VALLEYS',
            'ENGLISH VALLEYS 9TH',
            'ESTHERVILLE LINCOLN CENTRAL',
            'ESTHERVILLE LINCOLN CENTRAL 9TH',
            'FAIRFIELD',
            'FOREST CITY',
            'FOREST CITY 9TH',
            'FORT DODGE',
            'FORT DODGE 9TH',
            'FORT MADISON',
            'GARNER-HAYFIELD-VENTURA',
            'GARNER-HAYFIELD-VENTURA 9TH',
            'GILBERT',
            'GILBERT 9TH',
            'GLADBROOK-REINBECK',
            'GLIDDEN-RALSTON',
            'GMG',
            'GMG 9TH',
            'GRAETTINGER-TERRIL/RUTHVEN-AYRSHIRE',
            'GREENE COUNTY',
            'GREENE COUNTY 9TH',
            'GRINNELL-NEWBURG',
            'GRINNELL-NEWBURG 9TH',
            'GRISWOLD',
            'GRISWOLD 9TH',
            'GRUNDY CENTER',
            'HAMPTON-DUMONT',
            'HAMPTON-DUMONT 9TH',
            'HARLAN',
            'HARRIS-LAKE PARK',
            'HARTLEY-MELVIN-SANBORN',
            'HIGHLAND',
            'HINTON',
            'HLV',
            'IKM-MANNING',
            'IKM-MANNING 9TH',
            'INDEPENDENCE',
            'INDIANOLA',
            'IOWA CITY CITY',
            'IOWA CITY WEST',
            'IOWA VALLEY',
            'IOWA VALLEY 9TH',
            'JANESVILLE',
            'JOHNSTON',
            'KEE',
            'KEOKUK',
            'KINGSLEY-PIERSON',
            'KNOXVILLE',
            'KUEMPER CATHOLIC',
            'KUEMPER CATHOLIC 9TH',
            'LAKE MILLS',
            'LAWTON-BRONSON',
            'LAWTON-BRONSON 9TH',
            'LE MARS 9TH',
            'LE MARS COMMUNITY',
            'LEMARS GEHLEN',
            'LENOX',
            'LEWIS CENTRAL',
            'LEWIS CENTRAL 9TH',
            'LINN-MAR',
            'LINN-MAR 9TH',
            'LISBON',
            'LOUISA-MUSCATINE',
            'LYNNVILLE-SULLY',
            'MADRID',
            'MAHARISHI MIDDLE',
            'MAHARISHI UPPER',
            'MAPLE VALLEY-ANTHON OTO',
            'MAQUOKETA',
            'MAQUOKETA 9TH',
            'MAQUOKETA VALLEY',
            'MAQUOKETA VALLEY 9TH',
            'MARSHALLTOWN',
            'MARSHALLTOWN 9TH',
            'MARTENSDALE-ST MARYS',
            'MASON CITY',
            'MASON CITY 9TH',
            'MAYNARD WEST CENTRAL',
            'MEDIAPOLIS',
            'MELCHER-DALLAS',
            'MESKWAKI SETTLEMENT',
            'MID-PRAIRIE',
            'MIDLAND',
            'MMCRU',
            'MONTICELLO',
            'MONTICELLO 9TH',
            'MORAVIA',
            'MORAVIA 9TH',
            'MORMON TRAIL',
            'MOULTON-UDELL',
            'MOUNT AYR',
            'MOUNT AYR 9TH',
            'MOUNT PLEASANT',
            'MOUNT VERNON',
            'MURRAY',
            'MUSCATINE',
            'NASHUA-PLAINFIELD',
            'NEVADA',
            'NEVADA 9TH',
            'NEWELL-FONDA',
            'NEWELL-FONDA 9TH',
            'NODAWAY VALLEY',
            'NORTH BUTLER',
            'NORTH BUTLER 9TH',
            'NORTH CEDAR',
            'NORTH FAYETTE VALLEY',
            'NORTH LINN',
            'NORTH LINN 9TH',
            'NORTH MAHASKA',
            'NORTH MAHASKA 9TH',
            'NORTH POLK',
            'NORTH POLK 9TH',
            'NORTH UNION',
            'NORTHEAST COMMUNITY',
            'NORTHEAST COMMUNITY 9TH',
            'NORTHWOOD-KENSETT',
            'NORWALK',
            'NORWALK 9TH',
            'OA-BC-IG',
            'OELWEIN',
            'OELWEIN 9TH',
            'OKOBOJI',
            'OKOBOJI 9TH',
            'OSKALOOSA',
            'PANORAMA',
            'PELLA CHRISTIAN',
            'PERRY',
            'PERRY 9TH',
            'PLEASANT VALLEY',
            'POCAHONTAS AREA',
            'POSTVILLE',
            'PRINCE OF PEACE 9TH',
            'PRINCE OF PEACE CATHOLIC',
            'RED OAK',
            'RED OAK 9TH',
            'REMSEN ST MARY'S',
            'RIDGE VIEW',
            'RIDGE VIEW 9TH',
            'RIVER VALLEY',
            'RIVER VALLEY 9TH',
            'ROCK VALLEY',
            'ROCK VALLEY 9TH',
            'ROCKFORD',
            'ROLAND-STORY',
            'ROLAND-STORY 9TH',
            'SAINT ANSGAR',
            'SAINT ANSGAR 9TH',
            'SERGEANT BLUFF-LUTON',
            'SHELDON',
            'SHELDON 9TH',
            'SHENANDOAH',
            'SHENANDOAH 9TH',
            'SIBLEY-OCHEYEDAN',
            'SIBLEY-OCHEYEDAN 9TH',
            'SIOUX CENTER',
            'SIOUX CENTER 9TH',
            'SIOUX CENTRAL',
            'SIOUX CENTRAL 9TH',
            'SIOUX CITY EAST',
            'SIOUX CITY EAST 9TH',
            'SIOUX CITY NORTH',
            'SIOUXLAND CHRISTIAN',
            'SOUTH CENTRAL CALHOUN',
            'SOUTH HAMILTON',
            'SOUTH HARDIN',
            'SOUTH PAGE',
            'SOUTH TAMA',
            'SOUTH TAMA 9TH',
            'SOUTH WINNESHIEK',
            'SOUTH WINNESHIEK 9TH',
            'SOUTHEAST POLK',
            'SOUTHEAST POLK 9TH',
            'SOUTHEAST VALLEY',
            'SOUTHEAST WARREN',
            'SOUTHWEST VALLEY',
            'SPENCER',
            'SPENCER 9TH',
            'SPIRIT LAKE',
            'STANTON',
            'STARMONT',
            'STORM LAKE',
            'STORM LAKE 9TH',
            'STORM LAKE ST MARYS',
            'SUMNER-FREDERICKSBURG',
            'TIPTON',
            'TREYNOR',
            'TREYNOR 9TH',
            'TRI-COUNTY',
            'TRI-COUNTY 9TH',
            'TRIPOLI',
            'TURKEY VALLEY',
            'TWIN CEDARS',
            'UNDERWOOD',
            'UNION',
            'UNION 9TH',
            'URBANDALE',
            'VALLEY LUTHERAN',
            'VAN METER',
            'VINTON-SHELLSBURG',
            'VINTON-SHELLSBURG 9TH',
            'WALNUT CREEK CAMPUS',
            'WAPELLO',
            'WAPSIE VALLEY',
            'WASHINGTON',
            'WATERLOO CHRISTIAN',
            'WATERLOO COLUMBUS',
            'WATERLOO EAST',
            'WATERLOO WEST',
            'WATERLOO WEST 9TH',
            'WAUKEE',
            'WAUKEE 9TH',
            'WAUKON',
            'WAUKON 9TH',
            'WAVERLY-SHELL ROCK',
            'WAVERLY-SHELL ROCK 9TH',
            'WEBSTER CITY',
            'WEST BURLINGTON ARNOLD',
            'WEST CENTRAL VALLEY',
            'WEST DELAWARE',
            'WEST DELAWARE 9TH',
            'WEST DES MOINES VALLEY',
            'WEST DES MOINES VALLEY SOUTHWOODS',
            'WEST FORK',
            'WEST HANCOCK',
            'WEST HANCOCK 9TH',
            'WEST HARRISON',
            'WEST LIBERTY',
            'WEST LYON',
            'WEST MONONA',
            'WESTERN CHRISTIAN',
            'WESTERN CHRISTIAN 9TH',
            'WESTWOOD',
            'WHITING',
            'WILLIAMSBURG',
            'WILLIAMSBURG 9TH',
            'WINFIELD-MT UNION',
            'WINTERSET',
            'WINTERSET 9TH',
            'WOODBURY CENTRAL',
            'WOODBURY CENTRAL 9TH',
            'WOODWARD-GRANGER',
            'WOODWARD-GRANGER 9TH',
        ]),
    ];
});
