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
            $table->string('iso_639_1_code');
            $table->timestamps();
        });



        DB::table('languages')->insert([
            'iso_name' => 'Abkhazian',
            'native_name' => 'аҧсуа бызшәа, аҧсшәа',
            'iso_639_1_code' => 'ab'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Afar', 'native_name' => 'Afaraf', 'iso_639_1_code' => 'aa']);
        DB::table('languages')->insert([
            'iso_name' => 'Afrikaans',
            'native_name' => 'Afrikaans',
            'iso_639_1_code' => 'af'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Akan', 'native_name' => 'Akan', 'iso_639_1_code' => 'ak']);
        DB::table('languages')->insert(['iso_name' => 'Albanian', 'native_name' => 'Shqip', 'iso_639_1_code' => 'sq']);
        DB::table('languages')->insert(['iso_name' => 'Amharic', 'native_name' => 'አማርኛ', 'iso_639_1_code' => 'am']);
        DB::table('languages')->insert(['iso_name' => 'Arabic', 'native_name' => 'العربية', 'iso_639_1_code' => 'ar']);
        DB::table('languages')->insert([
            'iso_name' => 'Aragonese',
            'native_name' => 'aragonés',
            'iso_639_1_code' => 'an'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Armenian',
            'native_name' => 'Հայերեն',
            'iso_639_1_code' => 'hy'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Assamese',
            'native_name' => 'অসমীয়া',
            'iso_639_1_code' => 'as'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Avaric',
            'native_name' => 'авар мацӀ, магӀарул мацӀ',
            'iso_639_1_code' => 'av'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Avestan', 'native_name' => 'avesta', 'iso_639_1_code' => 'ae']);
        DB::table('languages')->insert([
            'iso_name' => 'Aymara',
            'native_name' => 'aymar aru',
            'iso_639_1_code' => 'ay'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Azerbaijani',
            'native_name' => 'azərbaycan dili',
            'iso_639_1_code' => 'az'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Bambara',
            'native_name' => 'bamanankan',
            'iso_639_1_code' => 'bm'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Bashkir',
            'native_name' => 'башҡорт теле',
            'iso_639_1_code' => 'ba'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Basque',
            'native_name' => 'euskara, euskera',
            'iso_639_1_code' => 'eu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Belarusian',
            'native_name' => 'беларуская мова',
            'iso_639_1_code' => 'be'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Bengali', 'native_name' => 'বাংলা', 'iso_639_1_code' => 'bn']);
        DB::table('languages')->insert([
            'iso_name' => 'Bihari languages',
            'native_name' => 'भोजपुरी',
            'iso_639_1_code' => 'bh'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Bislama', 'native_name' => 'Bislama', 'iso_639_1_code' => 'bi']);
        DB::table('languages')->insert([
            'iso_name' => 'Bosnian',
            'native_name' => 'bosanski jezik',
            'iso_639_1_code' => 'bs'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Breton',
            'native_name' => 'brezhoneg',
            'iso_639_1_code' => 'br'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Bulgarian',
            'native_name' => 'български език',
            'iso_639_1_code' => 'bg'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Burmese', 'native_name' => 'ဗမာစာ', 'iso_639_1_code' => 'my']);
        DB::table('languages')->insert([
            'iso_name' => 'Catalan, Valencian',
            'native_name' => 'català, valencià',
            'iso_639_1_code' => 'ca'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chamorro',
            'native_name' => 'Chamoru',
            'iso_639_1_code' => 'ch'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chechen',
            'native_name' => 'нохчийн мотт',
            'iso_639_1_code' => 'ce'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chichewa, Chewa, Nyanja',
            'native_name' => 'chiCheŵa, chinyanja',
            'iso_639_1_code' => 'ny'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chinese',
            'native_name' => '中文(Zhōngwén), 汉语, 漢語',
            'iso_639_1_code' => 'zh'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Chuvash',
            'native_name' => 'чӑваш чӗлхи',
            'iso_639_1_code' => 'cv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Cornish',
            'native_name' => 'Kernewek',
            'iso_639_1_code' => 'kw'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Corsican',
            'native_name' => 'corsu, lingua corsa',
            'iso_639_1_code' => 'co'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Cree', 'native_name' => 'ᓀᐦᐃᔭᐍᐏᐣ', 'iso_639_1_code' => 'cr']);
        DB::table('languages')->insert([
            'iso_name' => 'Croatian',
            'native_name' => 'hrvatski jezik',
            'iso_639_1_code' => 'hr'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Czech',
            'native_name' => 'čeština, český jazyk',
            'iso_639_1_code' => 'cs'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Danish', 'native_name' => 'dansk', 'iso_639_1_code' => 'da']);
        DB::table('languages')->insert([
            'iso_name' => 'Divehi, Dhivehi, Maldivian',
            'native_name' => 'ދިވެހި',
            'iso_639_1_code' => 'dv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Dutch, Flemish',
            'native_name' => 'Nederlands, Vlaams',
            'iso_639_1_code' => 'nl'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Dzongkha', 'native_name' => 'རྫོང་ཁ', 'iso_639_1_code' => 'dz']);
        DB::table('languages')->insert(['iso_name' => 'English', 'native_name' => 'English', 'iso_639_1_code' => 'en']);
        DB::table('languages')->insert([
            'iso_name' => 'Esperanto',
            'native_name' => 'Esperanto',
            'iso_639_1_code' => 'eo'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Estonian',
            'native_name' => 'eesti, eesti keel',
            'iso_639_1_code' => 'et'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Ewe', 'native_name' => 'Eʋegbe', 'iso_639_1_code' => 'ee']);
        DB::table('languages')->insert([
            'iso_name' => 'Faroese',
            'native_name' => 'føroyskt',
            'iso_639_1_code' => 'fo'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Fijian',
            'native_name' => 'vosa Vakaviti',
            'iso_639_1_code' => 'fj'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Finnish',
            'native_name' => 'suomi, suomen kieli',
            'iso_639_1_code' => 'fi'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'French',
            'native_name' => 'français, langue française',
            'iso_639_1_code' => 'fr'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Fulah',
            'native_name' => 'Fulfulde, Pulaar, Pular',
            'iso_639_1_code' => 'ff'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Galician', 'native_name' => 'Galego', 'iso_639_1_code' => 'gl']);
        DB::table('languages')->insert([
            'iso_name' => 'Georgian',
            'native_name' => 'ქართული',
            'iso_639_1_code' => 'ka'
        ]);
        DB::table('languages')->insert(['iso_name' => 'German', 'native_name' => 'Deutsch', 'iso_639_1_code' => 'de']);
        DB::table('languages')->insert([
            'iso_name' => 'Greek (modern)',
            'native_name' => 'ελληνικά',
            'iso_639_1_code' => 'el'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Guaraní',
            'native_name' => 'Avañe\'ẽ',
            'iso_639_1_code' => 'gn'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Gujarati',
            'native_name' => 'ગુજરાતી',
            'iso_639_1_code' => 'gu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Haitian, Haitian Creole',
            'native_name' => 'Kreyòl ayisyen',
            'iso_639_1_code' => 'ht'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hausa',
            'native_name' => '(Hausa) هَوُسَ',
            'iso_639_1_code' => 'ha'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hebrew (modern)',
            'native_name' => 'עברית',
            'iso_639_1_code' => 'he'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Herero',
            'native_name' => 'Otjiherero',
            'iso_639_1_code' => 'hz'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hindi',
            'native_name' => 'हिन्दी, हिंदी',
            'iso_639_1_code' => 'hi'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hiri Motu',
            'native_name' => 'Hiri Motu',
            'iso_639_1_code' => 'ho'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Hungarian',
            'native_name' => 'magyar',
            'iso_639_1_code' => 'hu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Interlingua',
            'native_name' => 'Interlingua',
            'iso_639_1_code' => 'ia'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Indonesian',
            'native_name' => 'Bahasa Indonesia',
            'iso_639_1_code' => 'id'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Interlingue',
            'native_name' => 'Interlingue',
            'iso_639_1_code' => 'ie'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Irish', 'native_name' => 'Gaeilge', 'iso_639_1_code' => 'ga']);
        DB::table('languages')->insert(['iso_name' => 'Igbo', 'native_name' => 'Asụsụ Igbo', 'iso_639_1_code' => 'ig']);
        DB::table('languages')->insert([
            'iso_name' => 'Inupiaq',
            'native_name' => 'Iñupiaq, Iñupiatun',
            'iso_639_1_code' => 'ik'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Ido', 'native_name' => 'Ido', 'iso_639_1_code' => 'io']);
        DB::table('languages')->insert([
            'iso_name' => 'Icelandic',
            'native_name' => 'Íslenska',
            'iso_639_1_code' => 'is'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Italian',
            'native_name' => 'Italiano',
            'iso_639_1_code' => 'it'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Inuktitut',
            'native_name' => 'ᐃᓄᒃᑎᑐᑦ',
            'iso_639_1_code' => 'iu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Japanese',
            'native_name' => '日本語 (にほんご)',
            'iso_639_1_code' => 'ja'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Javanese',
            'native_name' => 'ꦧꦱꦗꦮ, Basa Jawa',
            'iso_639_1_code' => 'jv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kalaallisut, Greenlandic',
            'native_name' => 'kalaallisut, kalaallit oqaasii',
            'iso_639_1_code' => 'kl'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Kannada', 'native_name' => 'ಕನ್ನಡ', 'iso_639_1_code' => 'kn']);
        DB::table('languages')->insert(['iso_name' => 'Kanuri', 'native_name' => 'Kanuri', 'iso_639_1_code' => 'kr']);
        DB::table('languages')->insert([
            'iso_name' => 'Kashmiri',
            'native_name' => 'कश्मीरी, كشميري‎',
            'iso_639_1_code' => 'ks'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kazakh',
            'native_name' => 'қазақ тілі',
            'iso_639_1_code' => 'kk'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Central Khmer',
            'native_name' => 'ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ',
            'iso_639_1_code' => 'km'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kikuyu, Gikuyu',
            'native_name' => 'Gĩkũyũ',
            'iso_639_1_code' => 'ki'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kinyarwanda',
            'native_name' => 'Ikinyarwanda',
            'iso_639_1_code' => 'rw'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kirghiz, Kyrgyz',
            'native_name' => 'Кыргызча, Кыргыз тили',
            'iso_639_1_code' => 'ky'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Komi', 'native_name' => 'коми кыв', 'iso_639_1_code' => 'kv']);
        DB::table('languages')->insert(['iso_name' => 'Kongo', 'native_name' => 'Kikongo', 'iso_639_1_code' => 'kg']);
        DB::table('languages')->insert(['iso_name' => 'Korean', 'native_name' => '한국어', 'iso_639_1_code' => 'ko']);
        DB::table('languages')->insert([
            'iso_name' => 'Kurdish',
            'native_name' => 'Kurdî, كوردی‎',
            'iso_639_1_code' => 'ku'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Kuanyama, Kwanyama',
            'native_name' => 'Kuanyama',
            'iso_639_1_code' => 'kj'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Latin',
            'native_name' => 'latine, lingua latina',
            'iso_639_1_code' => 'la'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Luxembourgish, Letzeburgesch',
            'native_name' => 'Lëtzebuergesch',
            'iso_639_1_code' => 'lb'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Ganda', 'native_name' => 'Luganda', 'iso_639_1_code' => 'lg']);
        DB::table('languages')->insert([
            'iso_name' => 'Limburgan, Limburger, Limburgish',
            'native_name' => 'Limburgs',
            'iso_639_1_code' => 'li'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Lingala', 'native_name' => 'Lingála', 'iso_639_1_code' => 'ln']);
        DB::table('languages')->insert(['iso_name' => 'Lao', 'native_name' => 'ພາສາລາວ', 'iso_639_1_code' => 'lo']);
        DB::table('languages')->insert([
            'iso_name' => 'Lithuanian',
            'native_name' => 'lietuvių kalba',
            'iso_639_1_code' => 'lt'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Luba-Katanga',
            'native_name' => 'Kiluba',
            'iso_639_1_code' => 'lu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Latvian',
            'native_name' => 'Latviešu Valoda',
            'iso_639_1_code' => 'lv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Manx',
            'native_name' => 'Gaelg, Gailck',
            'iso_639_1_code' => 'gv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Macedonian',
            'native_name' => 'македонски јазик',
            'iso_639_1_code' => 'mk'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Malagasy',
            'native_name' => 'fiteny malagasy',
            'iso_639_1_code' => 'mg'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Malay',
            'native_name' => 'Bahasa Melayu, بهاس ملايو‎',
            'iso_639_1_code' => 'ms'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Malayalam',
            'native_name' => 'മലയാളം',
            'iso_639_1_code' => 'ml'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Maltese', 'native_name' => 'Malti', 'iso_639_1_code' => 'mt']);
        DB::table('languages')->insert([
            'iso_name' => 'Maori',
            'native_name' => 'te reo Māori',
            'iso_639_1_code' => 'mi'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Marathi', 'native_name' => 'मराठी', 'iso_639_1_code' => 'mr']);
        DB::table('languages')->insert([
            'iso_name' => 'Marshallese',
            'native_name' => 'Kajin M̧ajeļ',
            'iso_639_1_code' => 'mh'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Mongolian',
            'native_name' => 'Монгол хэл',
            'iso_639_1_code' => 'mn'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Nauru',
            'native_name' => 'Dorerin Naoero',
            'iso_639_1_code' => 'na'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Navajo, Navaho',
            'native_name' => 'Diné bizaad',
            'iso_639_1_code' => 'nv'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'North Ndebele',
            'native_name' => 'isiNdebele',
            'iso_639_1_code' => 'nd'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Nepali', 'native_name' => 'नेपाली', 'iso_639_1_code' => 'ne']);
        DB::table('languages')->insert(['iso_name' => 'Ndonga', 'native_name' => 'Owambo', 'iso_639_1_code' => 'ng']);
        DB::table('languages')->insert([
            'iso_name' => 'Norwegian Bokmål',
            'native_name' => 'Norsk Bokmål',
            'iso_639_1_code' => 'nb'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Norwegian Nynorsk',
            'native_name' => 'Norsk Nynorsk',
            'iso_639_1_code' => 'nn'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Norwegian', 'native_name' => 'Norsk', 'iso_639_1_code' => 'no']);
        DB::table('languages')->insert([
            'iso_name' => 'Sichuan Yi, Nuosu',
            'native_name' => 'ꆈꌠ꒿ Nuosuhxop',
            'iso_639_1_code' => 'ii'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'South Ndebele',
            'native_name' => 'isiNdebele',
            'iso_639_1_code' => 'nr'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Occitan',
            'native_name' => 'occitan, lenga d\'òc',
            'iso_639_1_code' => 'oc'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Ojibwa', 'native_name' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ', 'iso_639_1_code' => 'oj']);
        DB::table('languages')->insert([
            'iso_name' => 'Church Slavic, Church Slavonic, Old Church Slavonic, Old Slavonic, Old Bulgarian',
            'native_name' => 'ѩзыкъ словѣньскъ',
            'iso_639_1_code' => 'cu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Oromo',
            'native_name' => 'Afaan Oromoo',
            'iso_639_1_code' => 'om'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Oriya', 'native_name' => 'ଓଡ଼ିଆ', 'iso_639_1_code' => 'or']);
        DB::table('languages')->insert([
            'iso_name' => 'Ossetian, Ossetic',
            'native_name' => 'ирон æвзаг',
            'iso_639_1_code' => 'os'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Panjabi, Punjabi',
            'native_name' => 'ਪੰਜਾਬੀ',
            'iso_639_1_code' => 'pa'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Pali', 'native_name' => 'पाऴि', 'iso_639_1_code' => 'pi']);
        DB::table('languages')->insert(['iso_name' => 'Persian', 'native_name' => 'فارسی', 'iso_639_1_code' => 'fa']);
        DB::table('languages')->insert([
            'iso_name' => 'Polish',
            'native_name' => 'Język Polski, Polszczyzna',
            'iso_639_1_code' => 'pl'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Pashto, Pushto',
            'native_name' => 'پښتو',
            'iso_639_1_code' => 'ps'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Portuguese',
            'native_name' => 'Português',
            'iso_639_1_code' => 'pt'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Quechua',
            'native_name' => 'Runa Simi, Kichwa',
            'iso_639_1_code' => 'qu'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Romansh',
            'native_name' => 'Rumantsch Grischun',
            'iso_639_1_code' => 'rm'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Rundi', 'native_name' => 'Ikirundi', 'iso_639_1_code' => 'rn']);
        DB::table('languages')->insert([
            'iso_name' => 'Romanian, Moldavian, Moldovan',
            'native_name' => 'Română',
            'iso_639_1_code' => 'ro'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Russian', 'native_name' => 'Русский', 'iso_639_1_code' => 'ru']);
        DB::table('languages')->insert([
            'iso_name' => 'Sanskrit',
            'native_name' => 'संस्कृतम्',
            'iso_639_1_code' => 'sa'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Sardinian', 'native_name' => 'sardu', 'iso_639_1_code' => 'sc']);
        DB::table('languages')->insert([
            'iso_name' => 'Sindhi',
            'native_name' => 'सिन्धी, سنڌي، سندھی‎',
            'iso_639_1_code' => 'sd'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Northern Sami',
            'native_name' => 'Davvisámegiella',
            'iso_639_1_code' => 'se'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Samoan',
            'native_name' => 'gagana fa\'a Samoa',
            'iso_639_1_code' => 'sm'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Sango',
            'native_name' => 'yângâ tî sängö',
            'iso_639_1_code' => 'sg'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Serbian',
            'native_name' => 'српски језик',
            'iso_639_1_code' => 'sr'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Gaelic, Scottish Gaelic',
            'native_name' => 'Gàidhlig',
            'iso_639_1_code' => 'gd'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Shona', 'native_name' => 'chiShona', 'iso_639_1_code' => 'sn']);
        DB::table('languages')->insert([
            'iso_name' => 'Sinhala, Sinhalese',
            'native_name' => 'සිංහල',
            'iso_639_1_code' => 'si'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Slovak',
            'native_name' => 'Slovenčina, Slovenský Jazyk',
            'iso_639_1_code' => 'sk'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Slovenian',
            'native_name' => 'Slovenski Jezik, Slovenščina',
            'iso_639_1_code' => 'sl'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Somali',
            'native_name' => 'Soomaaliga, af Soomaali',
            'iso_639_1_code' => 'so'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Southern Sotho',
            'native_name' => 'Sesotho',
            'iso_639_1_code' => 'st'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Spanish, Castilian',
            'native_name' => 'Español',
            'iso_639_1_code' => 'es'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Sundanese',
            'native_name' => 'Basa Sunda',
            'iso_639_1_code' => 'su'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Swahili',
            'native_name' => 'Kiswahili',
            'iso_639_1_code' => 'sw'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Swati', 'native_name' => 'SiSwati', 'iso_639_1_code' => 'ss']);
        DB::table('languages')->insert(['iso_name' => 'Swedish', 'native_name' => 'Svenska', 'iso_639_1_code' => 'sv']);
        DB::table('languages')->insert(['iso_name' => 'Tamil', 'native_name' => 'தமிழ்', 'iso_639_1_code' => 'ta']);
        DB::table('languages')->insert(['iso_name' => 'Telugu', 'native_name' => 'తెలుగు', 'iso_639_1_code' => 'te']);
        DB::table('languages')->insert([
            'iso_name' => 'Tajik',
            'native_name' => 'тоҷикӣ, toçikī, تاجیکی‎',
            'iso_639_1_code' => 'tg'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Thai', 'native_name' => 'ไทย', 'iso_639_1_code' => 'th']);
        DB::table('languages')->insert(['iso_name' => 'Tigrinya', 'native_name' => 'ትግርኛ', 'iso_639_1_code' => 'ti']);
        DB::table('languages')->insert(['iso_name' => 'Tibetan', 'native_name' => 'བོད་ཡིག', 'iso_639_1_code' => 'bo']);
        DB::table('languages')->insert([
            'iso_name' => 'Turkmen',
            'native_name' => 'Türkmen, Түркмен',
            'iso_639_1_code' => 'tk'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Tagalog',
            'native_name' => 'Wikang Tagalog',
            'iso_639_1_code' => 'tl'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Tswana', 'native_name' => 'Setswana', 'iso_639_1_code' => 'tn']);
        DB::table('languages')->insert([
            'iso_name' => 'Tonga (Tonga Islands)',
            'native_name' => 'Faka Tonga',
            'iso_639_1_code' => 'to'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Turkish', 'native_name' => 'Türkçe', 'iso_639_1_code' => 'tr']);
        DB::table('languages')->insert(['iso_name' => 'Tsonga', 'native_name' => 'Xitsonga', 'iso_639_1_code' => 'ts']);
        DB::table('languages')->insert([
            'iso_name' => 'Tatar',
            'native_name' => 'татар теле, tatar tele',
            'iso_639_1_code' => 'tt'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Twi', 'native_name' => 'Twi', 'iso_639_1_code' => 'tw']);
        DB::table('languages')->insert([
            'iso_name' => 'Tahitian',
            'native_name' => 'Reo Tahiti',
            'iso_639_1_code' => 'ty'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Uighur',
            'native_name' => 'ئۇيغۇرچە‎Uyghur, Uyghurche',
            'iso_639_1_code' => 'ug'
        ]);
        DB::table('languages')->insert([
            'iso_name' => 'Ukrainian',
            'native_name' => 'Українська',
            'iso_639_1_code' => 'uk'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Urdu', 'native_name' => 'اردو', 'iso_639_1_code' => 'ur']);
        DB::table('languages')->insert([
            'iso_name' => 'Uzbek',
            'native_name' => 'Oʻzbek, Ўзбек, أۇزبېك‎',
            'iso_639_1_code' => 'uz'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Venda', 'native_name' => 'Tshivenḓa', 'iso_639_1_code' => 've']);
        DB::table('languages')->insert([
            'iso_name' => 'Vietnamese',
            'native_name' => 'Tiếng Việt',
            'iso_639_1_code' => 'vi'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Volapük', 'native_name' => 'Volapük', 'iso_639_1_code' => 'vo']);
        DB::table('languages')->insert(['iso_name' => 'Walloon', 'native_name' => 'Walon', 'iso_639_1_code' => 'wa']);
        DB::table('languages')->insert(['iso_name' => 'Welsh', 'native_name' => 'Cymraeg', 'iso_639_1_code' => 'cy']);
        DB::table('languages')->insert(['iso_name' => 'Wolof', 'native_name' => 'Wollof', 'iso_639_1_code' => 'wo']);
        DB::table('languages')->insert([
            'iso_name' => 'Western Frisian',
            'native_name' => 'Frysk',
            'iso_639_1_code' => 'fy'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Xhosa', 'native_name' => 'isiXhosa', 'iso_639_1_code' => 'xh']);
        DB::table('languages')->insert(['iso_name' => 'Yiddish', 'native_name' => 'ייִדיש', 'iso_639_1_code' => 'yi']);
        DB::table('languages')->insert(['iso_name' => 'Yoruba', 'native_name' => 'Yorùbá', 'iso_639_1_code' => 'yo']);
        DB::table('languages')->insert([
            'iso_name' => 'Zhuang, Chuang',
            'native_name' => 'Saɯ cueŋƅ, Saw cuengh',
            'iso_639_1_code' => 'za'
        ]);
        DB::table('languages')->insert(['iso_name' => 'Zulu', 'native_name' => 'isiZulu', 'iso_639_1_code' => 'zu']);

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
