<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iso_name');
            $table->string('native_name');
            $table->string('code');
            $table->timestamps();
        });



        DB::table('languages')->insert([
            'iso_name' => 'Abkhazian',
            'native_name' => 'аҧсуа бызшәа, аҧсшәа',
            'code' => 'ab'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Afar', 'native_name' => 'Afaraf', 'code' => 'aa']);
        DB::table('languages')->insert([
            'iso_name' => 'Afrikaans',
            'native_name' => 'Afrikaans',
            'code' => 'af'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Akan', 'native_name' => 'Akan', 'code' => 'ak']);
        DB::table('languages')->insert(['iso_name' => 'Albanian', 'native_name' => 'Shqip', 'code' => 'sq']);
        DB::table('languages')->insert(['iso_name' => 'Amharic', 'native_name' => 'አማርኛ', 'code' => 'am']);
        DB::table('languages')->insert(['iso_name' => 'Arabic', 'native_name' => 'العربية', 'code' => 'ar']);
        DB::table('languages')->insert([
            'iso_name' => 'Aragonese',
            'native_name' => 'aragonés',
            'code' => 'an'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Armenian',
            'native_name' => 'Հայերեն',
            'code' => 'hy'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Assamese',
            'native_name' => 'অসমীয়া',
            'code' => 'as'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Avaric',
            'native_name' => 'авар мацӀ, магӀарул мацӀ',
            'code' => 'av'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Avestan', 'native_name' => 'avesta', 'code' => 'ae']);
        DB::table('languages')->insert([
            'iso_name' => 'Aymara',
            'native_name' => 'aymar aru',
            'code' => 'ay'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Azerbaijani',
            'native_name' => 'azərbaycan dili',
            'code' => 'az'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Bambara',
            'native_name' => 'bamanankan',
            'code' => 'bm'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Bashkir',
            'native_name' => 'башҡорт теле',
            'code' => 'ba'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Basque',
            'native_name' => 'euskara, euskera',
            'code' => 'eu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Belarusian',
            'native_name' => 'беларуская мова',
            'code' => 'be'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Bengali', 'native_name' => 'বাংলা', 'code' => 'bn']);
        DB::table('languages')->insert([
            'iso_name' => 'Bihari languages',
            'native_name' => 'भोजपुरी',
            'code' => 'bh'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Bislama', 'native_name' => 'Bislama', 'code' => 'bi']);
        DB::table('languages')->insert([
            'iso_name' => 'Bosnian',
            'native_name' => 'bosanski jezik',
            'code' => 'bs'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Breton',
            'native_name' => 'brezhoneg',
            'code' => 'br'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Bulgarian',
            'native_name' => 'български език',
            'code' => 'bg'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Burmese', 'native_name' => 'ဗမာစာ', 'code' => 'my']);
        DB::table('languages')->insert([
            'iso_name' => 'Catalan, Valencian',
            'native_name' => 'català, valencià',
            'code' => 'ca'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chamorro',
            'native_name' => 'Chamoru',
            'code' => 'ch'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chechen',
            'native_name' => 'нохчийн мотт',
            'code' => 'ce'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chichewa, Chewa, Nyanja',
            'native_name' => 'chiCheŵa, chinyanja',
            'code' => 'ny'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chinese',
            'native_name' => '中文(Zhōngwén), 汉语, 漢語',
            'code' => 'zh'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chuvash',
            'native_name' => 'чӑваш чӗлхи',
            'code' => 'cv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Cornish',
            'native_name' => 'Kernewek',
            'code' => 'kw'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Corsican',
            'native_name' => 'corsu, lingua corsa',
            'code' => 'co'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Cree', 'native_name' => 'ᓀᐦᐃᔭᐍᐏᐣ', 'code' => 'cr']);
        DB::table('languages')->insert([
            'iso_name' => 'Croatian',
            'native_name' => 'hrvatski jezik',
            'code' => 'hr'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Czech',
            'native_name' => 'čeština, český jazyk',
            'code' => 'cs'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Danish', 'native_name' => 'dansk', 'code' => 'da']);
        DB::table('languages')->insert([
            'iso_name' => 'Divehi, Dhivehi, Maldivian',
            'native_name' => 'ދިވެހި',
            'code' => 'dv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Dutch, Flemish',
            'native_name' => 'Nederlands, Vlaams',
            'code' => 'nl'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Dzongkha', 'native_name' => 'རྫོང་ཁ', 'code' => 'dz']);
        DB::table('languages')->insert(['iso_name' => 'English', 'native_name' => 'English', 'code' => 'en']);
        DB::table('languages')->insert([
            'iso_name' => 'Esperanto',
            'native_name' => 'Esperanto',
            'code' => 'eo'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Estonian',
            'native_name' => 'eesti, eesti keel',
            'code' => 'et'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Ewe', 'native_name' => 'Eʋegbe', 'code' => 'ee']);
        DB::table('languages')->insert([
            'iso_name' => 'Faroese',
            'native_name' => 'føroyskt',
            'code' => 'fo'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Fijian',
            'native_name' => 'vosa Vakaviti',
            'code' => 'fj'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Finnish',
            'native_name' => 'suomi, suomen kieli',
            'code' => 'fi'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'French',
            'native_name' => 'français, langue française',
            'code' => 'fr'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Fulah',
            'native_name' => 'Fulfulde, Pulaar, Pular',
            'code' => 'ff'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Galician', 'native_name' => 'Galego', 'code' => 'gl']);
        DB::table('languages')->insert([
            'iso_name' => 'Georgian',
            'native_name' => 'ქართული',
            'code' => 'ka'
        ]);
        DB::table('languages')->insert(['iso_name' => 'German', 'native_name' => 'Deutsch', 'code' => 'de']);
        DB::table('languages')->insert([
            'iso_name' => 'Greek (modern)',
            'native_name' => 'ελληνικά',
            'code' => 'el'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Guaraní',
            'native_name' => 'Avañe\'ẽ',
            'code' => 'gn'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Gujarati',
            'native_name' => 'ગુજરાતી',
            'code' => 'gu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Haitian, Haitian Creole',
            'native_name' => 'Kreyòl ayisyen',
            'code' => 'ht'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hausa',
            'native_name' => '(Hausa) هَوُسَ',
            'code' => 'ha'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hebrew (modern)',
            'native_name' => 'עברית',
            'code' => 'he'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Herero',
            'native_name' => 'Otjiherero',
            'code' => 'hz'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hindi',
            'native_name' => 'हिन्दी, हिंदी',
            'code' => 'hi'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hiri Motu',
            'native_name' => 'Hiri Motu',
            'code' => 'ho'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hungarian',
            'native_name' => 'magyar',
            'code' => 'hu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Interlingua',
            'native_name' => 'Interlingua',
            'code' => 'ia'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Indonesian',
            'native_name' => 'Bahasa Indonesia',
            'code' => 'id'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Interlingue',
            'native_name' => 'Interlingue',
            'code' => 'ie'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Irish', 'native_name' => 'Gaeilge', 'code' => 'ga']);
        DB::table('languages')->insert(['iso_name' => 'Igbo', 'native_name' => 'Asụsụ Igbo', 'code' => 'ig']);
        DB::table('languages')->insert([
            'iso_name' => 'Inupiaq',
            'native_name' => 'Iñupiaq, Iñupiatun',
            'code' => 'ik'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Ido', 'native_name' => 'Ido', 'code' => 'io']);
        DB::table('languages')->insert([
            'iso_name' => 'Icelandic',
            'native_name' => 'Íslenska',
            'code' => 'is'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Italian',
            'native_name' => 'Italiano',
            'code' => 'it'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Inuktitut',
            'native_name' => 'ᐃᓄᒃᑎᑐᑦ',
            'code' => 'iu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Japanese',
            'native_name' => '日本語 (にほんご)',
            'code' => 'ja'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Javanese',
            'native_name' => 'ꦧꦱꦗꦮ, Basa Jawa',
            'code' => 'jv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kalaallisut, Greenlandic',
            'native_name' => 'kalaallisut, kalaallit oqaasii',
            'code' => 'kl'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Kannada', 'native_name' => 'ಕನ್ನಡ', 'code' => 'kn']);
        DB::table('languages')->insert(['iso_name' => 'Kanuri', 'native_name' => 'Kanuri', 'code' => 'kr']);
        DB::table('languages')->insert([
            'iso_name' => 'Kashmiri',
            'native_name' => 'कश्मीरी, كشميري‎',
            'code' => 'ks'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kazakh',
            'native_name' => 'қазақ тілі',
            'code' => 'kk'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Central Khmer',
            'native_name' => 'ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ',
            'code' => 'km'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kikuyu, Gikuyu',
            'native_name' => 'Gĩkũyũ',
            'code' => 'ki'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kinyarwanda',
            'native_name' => 'Ikinyarwanda',
            'code' => 'rw'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kirghiz, Kyrgyz',
            'native_name' => 'Кыргызча, Кыргыз тили',
            'code' => 'ky'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Komi', 'native_name' => 'коми кыв', 'code' => 'kv']);
        DB::table('languages')->insert(['iso_name' => 'Kongo', 'native_name' => 'Kikongo', 'code' => 'kg']);
        DB::table('languages')->insert(['iso_name' => 'Korean', 'native_name' => '한국어', 'code' => 'ko']);
        DB::table('languages')->insert([
            'iso_name' => 'Kurdish',
            'native_name' => 'Kurdî, كوردی‎',
            'code' => 'ku'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kuanyama, Kwanyama',
            'native_name' => 'Kuanyama',
            'code' => 'kj'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Latin',
            'native_name' => 'latine, lingua latina',
            'code' => 'la'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Luxembourgish, Letzeburgesch',
            'native_name' => 'Lëtzebuergesch',
            'code' => 'lb'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Ganda', 'native_name' => 'Luganda', 'code' => 'lg']);
        DB::table('languages')->insert([
            'iso_name' => 'Limburgan, Limburger, Limburgish',
            'native_name' => 'Limburgs',
            'code' => 'li'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Lingala', 'native_name' => 'Lingála', 'code' => 'ln']);
        DB::table('languages')->insert(['iso_name' => 'Lao', 'native_name' => 'ພາສາລາວ', 'code' => 'lo']);
        DB::table('languages')->insert([
            'iso_name' => 'Lithuanian',
            'native_name' => 'lietuvių kalba',
            'code' => 'lt'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Luba-Katanga',
            'native_name' => 'Kiluba',
            'code' => 'lu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Latvian',
            'native_name' => 'Latviešu Valoda',
            'code' => 'lv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Manx',
            'native_name' => 'Gaelg, Gailck',
            'code' => 'gv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Macedonian',
            'native_name' => 'македонски јазик',
            'code' => 'mk'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Malagasy',
            'native_name' => 'fiteny malagasy',
            'code' => 'mg'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Malay',
            'native_name' => 'Bahasa Melayu, بهاس ملايو‎',
            'code' => 'ms'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Malayalam',
            'native_name' => 'മലയാളം',
            'code' => 'ml'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Maltese', 'native_name' => 'Malti', 'code' => 'mt']);
        DB::table('languages')->insert([
            'iso_name' => 'Maori',
            'native_name' => 'te reo Māori',
            'code' => 'mi'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Marathi', 'native_name' => 'मराठी', 'code' => 'mr']);
        DB::table('languages')->insert([
            'iso_name' => 'Marshallese',
            'native_name' => 'Kajin M̧ajeļ',
            'code' => 'mh'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Mongolian',
            'native_name' => 'Монгол хэл',
            'code' => 'mn'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Nauru',
            'native_name' => 'Dorerin Naoero',
            'code' => 'na'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Navajo, Navaho',
            'native_name' => 'Diné bizaad',
            'code' => 'nv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'North Ndebele',
            'native_name' => 'isiNdebele',
            'code' => 'nd'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Nepali', 'native_name' => 'नेपाली', 'code' => 'ne']);
        DB::table('languages')->insert(['iso_name' => 'Ndonga', 'native_name' => 'Owambo', 'code' => 'ng']);
        DB::table('languages')->insert([
            'iso_name' => 'Norwegian Bokmål',
            'native_name' => 'Norsk Bokmål',
            'code' => 'nb'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Norwegian Nynorsk',
            'native_name' => 'Norsk Nynorsk',
            'code' => 'nn'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Norwegian', 'native_name' => 'Norsk', 'code' => 'no']);
        DB::table('languages')->insert([
            'iso_name' => 'Sichuan Yi, Nuosu',
            'native_name' => 'ꆈꌠ꒿ Nuosuhxop',
            'code' => 'ii'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'South Ndebele',
            'native_name' => 'isiNdebele',
            'code' => 'nr'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Occitan',
            'native_name' => 'occitan, lenga d\'òc',
            'code' => 'oc'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Ojibwa', 'native_name' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ', 'code' => 'oj']);
        DB::table('languages')->insert([
            'iso_name' => 'Church Slavic, Church Slavonic, Old Church Slavonic, Old Slavonic, Old Bulgarian',
            'native_name' => 'ѩзыкъ словѣньскъ',
            'code' => 'cu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Oromo',
            'native_name' => 'Afaan Oromoo',
            'code' => 'om'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Oriya', 'native_name' => 'ଓଡ଼ିଆ', 'code' => 'or']);
        DB::table('languages')->insert([
            'iso_name' => 'Ossetian, Ossetic',
            'native_name' => 'ирон æвзаг',
            'code' => 'os'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Panjabi, Punjabi',
            'native_name' => 'ਪੰਜਾਬੀ',
            'code' => 'pa'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Pali', 'native_name' => 'पाऴि', 'code' => 'pi']);
        DB::table('languages')->insert(['iso_name' => 'Persian', 'native_name' => 'فارسی', 'code' => 'fa']);
        DB::table('languages')->insert([
            'iso_name' => 'Polish',
            'native_name' => 'Język Polski, Polszczyzna',
            'code' => 'pl'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Pashto, Pushto',
            'native_name' => 'پښتو',
            'code' => 'ps'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Portuguese',
            'native_name' => 'Português',
            'code' => 'pt'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Quechua',
            'native_name' => 'Runa Simi, Kichwa',
            'code' => 'qu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Romansh',
            'native_name' => 'Rumantsch Grischun',
            'code' => 'rm'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Rundi', 'native_name' => 'Ikirundi', 'code' => 'rn']);
        DB::table('languages')->insert([
            'iso_name' => 'Romanian, Moldavian, Moldovan',
            'native_name' => 'Română',
            'code' => 'ro'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Russian', 'native_name' => 'Русский', 'code' => 'ru']);
        DB::table('languages')->insert([
            'iso_name' => 'Sanskrit',
            'native_name' => 'संस्कृतम्',
            'code' => 'sa'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Sardinian', 'native_name' => 'sardu', 'code' => 'sc']);
        DB::table('languages')->insert([
            'iso_name' => 'Sindhi',
            'native_name' => 'सिन्धी, سنڌي، سندھی‎',
            'code' => 'sd'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Northern Sami',
            'native_name' => 'Davvisámegiella',
            'code' => 'se'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Samoan',
            'native_name' => 'gagana fa\'a Samoa',
            'code' => 'sm'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Sango',
            'native_name' => 'yângâ tî sängö',
            'code' => 'sg'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Serbian',
            'native_name' => 'српски језик',
            'code' => 'sr'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Gaelic, Scottish Gaelic',
            'native_name' => 'Gàidhlig',
            'code' => 'gd'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Shona', 'native_name' => 'chiShona', 'code' => 'sn']);
        DB::table('languages')->insert([
            'iso_name' => 'Sinhala, Sinhalese',
            'native_name' => 'සිංහල',
            'code' => 'si'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Slovak',
            'native_name' => 'Slovenčina, Slovenský Jazyk',
            'code' => 'sk'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Slovenian',
            'native_name' => 'Slovenski Jezik, Slovenščina',
            'code' => 'sl'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Somali',
            'native_name' => 'Soomaaliga, af Soomaali',
            'code' => 'so'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Southern Sotho',
            'native_name' => 'Sesotho',
            'code' => 'st'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Spanish, Castilian',
            'native_name' => 'Español',
            'code' => 'es'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Sundanese',
            'native_name' => 'Basa Sunda',
            'code' => 'su'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Swahili',
            'native_name' => 'Kiswahili',
            'code' => 'sw'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Swati', 'native_name' => 'SiSwati', 'code' => 'ss']);
        DB::table('languages')->insert(['iso_name' => 'Swedish', 'native_name' => 'Svenska', 'code' => 'sv']);
        DB::table('languages')->insert(['iso_name' => 'Tamil', 'native_name' => 'தமிழ்', 'code' => 'ta']);
        DB::table('languages')->insert(['iso_name' => 'Telugu', 'native_name' => 'తెలుగు', 'code' => 'te']);
        DB::table('languages')->insert([
            'iso_name' => 'Tajik',
            'native_name' => 'тоҷикӣ, toçikī, تاجیکی‎',
            'code' => 'tg'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Thai', 'native_name' => 'ไทย', 'code' => 'th']);
        DB::table('languages')->insert(['iso_name' => 'Tigrinya', 'native_name' => 'ትግርኛ', 'code' => 'ti']);
        DB::table('languages')->insert(['iso_name' => 'Tibetan', 'native_name' => 'བོད་ཡིག', 'code' => 'bo']);
        DB::table('languages')->insert([
            'iso_name' => 'Turkmen',
            'native_name' => 'Türkmen, Түркмен',
            'code' => 'tk'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Tagalog',
            'native_name' => 'Wikang Tagalog',
            'code' => 'tl'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Tswana', 'native_name' => 'Setswana', 'code' => 'tn']);
        DB::table('languages')->insert([
            'iso_name' => 'Tonga (Tonga Islands)',
            'native_name' => 'Faka Tonga',
            'code' => 'to'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Turkish', 'native_name' => 'Türkçe', 'code' => 'tr']);
        DB::table('languages')->insert(['iso_name' => 'Tsonga', 'native_name' => 'Xitsonga', 'code' => 'ts']);
        DB::table('languages')->insert([
            'iso_name' => 'Tatar',
            'native_name' => 'татар теле, tatar tele',
            'code' => 'tt'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Twi', 'native_name' => 'Twi', 'code' => 'tw']);
        DB::table('languages')->insert([
            'iso_name' => 'Tahitian',
            'native_name' => 'Reo Tahiti',
            'code' => 'ty'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Uighur',
            'native_name' => 'ئۇيغۇرچە‎Uyghur, Uyghurche',
            'code' => 'ug'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Ukrainian',
            'native_name' => 'Українська',
            'code' => 'uk'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Urdu', 'native_name' => 'اردو', 'code' => 'ur']);
        DB::table('languages')->insert([
            'iso_name' => 'Uzbek',
            'native_name' => 'Oʻzbek, Ўзбек, أۇزبېك‎',
            'code' => 'uz'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Venda', 'native_name' => 'Tshivenḓa', 'code' => 've']);
        DB::table('languages')->insert([
            'iso_name' => 'Vietnamese',
            'native_name' => 'Tiếng Việt',
            'code' => 'vi'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Volapük', 'native_name' => 'Volapük', 'code' => 'vo']);
        DB::table('languages')->insert(['iso_name' => 'Walloon', 'native_name' => 'Walon', 'code' => 'wa']);
        DB::table('languages')->insert(['iso_name' => 'Welsh', 'native_name' => 'Cymraeg', 'code' => 'cy']);
        DB::table('languages')->insert(['iso_name' => 'Wolof', 'native_name' => 'Wollof', 'code' => 'wo']);
        DB::table('languages')->insert([
            'iso_name' => 'Western Frisian',
            'native_name' => 'Frysk',
            'code' => 'fy'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Xhosa', 'native_name' => 'isiXhosa', 'code' => 'xh']);
        DB::table('languages')->insert(['iso_name' => 'Yiddish', 'native_name' => 'ייִדיש', 'code' => 'yi']);
        DB::table('languages')->insert(['iso_name' => 'Yoruba', 'native_name' => 'Yorùbá', 'code' => 'yo']);
        DB::table('languages')->insert([
            'iso_name' => 'Zhuang, Chuang',
            'native_name' => 'Saɯ cueŋƅ, Saw cuengh',
            'code' => 'za'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Zulu', 'native_name' => 'isiZulu', 'code' => 'zu']);

        $now = date('Y-m-d H:i:s');
        DB::table('languages')->update(['created_at' => $now, 'updated_at' => $now]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
