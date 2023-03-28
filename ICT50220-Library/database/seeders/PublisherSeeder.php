<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedPublishers = [
            ['id'=>'1', 'name'=>'Harper Voyager','country'=>'UK','url'=>'http://www.harpervoyagerbooks.com/',],
            ['id'=>'2', 'name'=>'MacMillan','country'=>'UK','url'=>'',],
            ['id'=>'3', 'name'=>'Penguin Classics','country'=>'','url'=>'',],
            ['id'=>'4', 'name'=>'Plata Publishing','country'=>'USA','url'=>'',],
            ['id'=>'5', 'name'=>'Crown Publishing Group','country'=>'USA','url'=>'',],
            ['id'=>'6', 'name'=>'Charles Scribners Sons','country'=>'USA','url'=>'',],
            ['id'=>'7', 'name'=>'Dark Horse Comics','country'=>'USA','url'=>'',],
            ['id'=>'8', 'name'=>'Pearson','country'=>'USA','url'=>'',],
            ['id'=>'9', 'name'=>'Vintage Books','country'=>'UK','url'=>'',],
            ['id'=>'10', 'name'=>'DAW Books','country'=>'USA','url'=>'',],
            ['id'=>'11', 'name'=>'Bloomsbury','country'=>'UK','url'=>'',],
            ['id'=>'12', 'name'=>'Tor Books','country'=>'USA','url'=>'https://www.tor.com/',],
            ['id'=>'13', 'name'=>'Bantam Books','country'=>'USA','url'=>'',],
            ['id'=>'14', 'name'=>'HarperCollins Publishers','country'=>'UK','url'=>'',],
            ['id'=>'15', 'name'=>'Putnam','country'=>'USA','url'=>'',],
            ['id'=>'16', 'name'=>'Penguin Books Australia','country'=>'AU','url'=>'',],
            ['id'=>'17', 'name'=>'Penguin Random House','country'=>'USA','url'=>'',],
            ['id'=>'18', 'name'=>'Apress','country'=>'USA','url'=>'https://apress.com',],
            ['id'=>'19', 'name'=>'John Wiley and Sons','country'=>'UK','url'=>'https://wiley.com',],
            ['id'=>'20', 'name'=>'OReilly Media','country'=>'USA','url'=>'',],
            ['id'=>'21', 'name'=>'Portfolio','country'=>'UK','url'=>'',],
            ['id'=>'22', 'name'=>'Da Capo Press','country'=>'UK','url'=>'https://dacapopress.com',],
            ['id'=>'23', 'name'=>'Copyhackers','country'=>'CA','url'=>'',],
            ['id'=>'24', 'name'=>'For Dummies','country'=>'USA','url'=>'',],
            ['id'=>'25', 'name'=>'McGraw-Hill Companies','country'=>'USA','url'=>'https://mcgraw-hill.com',],
            ['id'=>'26', 'name'=>'Tartarus Press','country'=>'UK','url'=>'http://www.tartaruspress.com/index.html',],
            ['id'=>'27', 'name'=>'Hesperian Press','country'=>'AU','url'=>'http://www.hesperianpress.com/',],
            ['id'=>'28', 'name'=>'Centipede Press','country'=>'USA','url'=>'http://www.centipedepress.com/',],
            ['id'=>'29', 'name'=>'Word Horde','country'=>'USA','url'=>'https://wordhorde.com/',],
            ['id'=>'30', 'name'=>'Lovecraft eZine Press','country'=>'USA','url'=>'https://lovecraftzine.com/',],
            ['id'=>'31', 'name'=>'Vikings','country'=>'UK','url'=>'',],
            ['id'=>'32', 'name'=>'Bantam UK ','country'=>'USA','url'=>'',],
            ['id'=>'33', 'name'=>'booktopia','country'=>'AU','url'=>'https://www.booktopia.com.au',],
            ['id'=>'34', 'name'=>'Black Library','country'=>'UK','url'=>'https://www.blacklibrary.com/',],
            ['id'=>'35', 'name'=>'Yapi Kredi','country'=>'TR','url'=>'https://www.yapikrediyayinlari.com.tr/',],
            ['id'=>'36', 'name'=>'Mulholland Books','country'=>'USA','url'=>'https://www.mulhollandbooks.com/',],
            ['id'=>'37', 'name'=>'Hachette Book Group','country'=>'','url'=>'https://www.hachettebookgroup.com/',],
            ['id'=>'38', 'name'=>'Yen Press','country'=>'Japan','url'=>'https://yenpress.com/',],
            ['id'=>'39', 'name'=>'Wordsworth Editions','country'=>'UK','url'=>'https://wordsworth-editions.com',],
            ['id'=>'40', 'name'=>'Transworld Publishers','country'=>'UK','url'=>'https://www.penguin.co.uk/company/publishers/transworld',],
            ['id'=>'41', 'name'=>'Vintage Espanol','country'=>'USA','url'=>'https://www.penguinrandomhouse.com/series/VEO/a-vintage-espanol-original',],
            ['id'=>'42', 'name'=>'Alias Editorial','country'=>'Mexico','url'=>'https://aliaseditorial.com/inicio/index.php',],
            ['id'=>'43', 'name'=>'Hodder & Stoughton','country'=>'UK','url'=>'https://www.hodder.co.uk/',],
            ['id'=>'44', 'name'=>'Disney-Hyperion','country'=>'USA','url'=>'https://books.disney.com/',],
            ['id'=>'45', 'name'=>'Scholastic Corporation','country'=>'USA','url'=>'https://www.scholastic.com/home',],
        ];

        foreach ($seedPublishers as $publisher){
            Publisher::create($publisher);
        }
    }
}
