<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            //Laki-laki Dewasa
            [
                'nama_produk' => 'Regular Fit Hoodie',
                'foto_produk' => 'images/regularFitL.jpg',
                'harga' => 479900,
                'stok' => 20,
                'diskon' => 0.5,
                'deskripsi' => 'Long-sleeved hoodie in soft sweatshirt fabric with a kangaroo pocket, double-layered drawstring hood with a wrapover front.',
                'kategori_id' => 1,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Resor Bercorak',
                'foto_produk' => 'images/resorBercorakL.jpg',
                'harga' => 199900,
                'stok' => 20,
                'diskon' => 0,
                'deskripsi' => 'Kemeja lengan pendek dari tenunan viskose bermotif dengan kerah lapel, plaket Prancis, dan kelim berpotongan lurus. ',
                'kategori_id' => 1,
                'supplier_id' => 2
            ],
            [
                'nama_produk' => 'Kemeja Regular Fit',
                'foto_produk' => 'images/kemejaregulerL.jpg',
                'harga' => 429900,
                'stok' => 26,
                'diskon' => 0.3,
                'deskripsi' => 'Kemeja berbahan katun tenun berpola dengan kerah rebah, plaket klasik dan pas bahu di bagian belakang.',
                'kategori_id' => 1,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Kemeja Resort Bermotif',
                'foto_produk' => 'images/kemejaresortL.jpg',
                'harga' => 379900,
                'stok' => 12,
                'diskon' => 0,
                'deskripsi' => 'Kemeja lengan pendek dari tenunan viscose bermotif dengan kerah resort, kancing tanpa garis plaket, dan pas bahu di belakang. ',
                'kategori_id' => 1,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Kemeja Resor Regular Fit',
                'foto_produk' => 'images/kemejaresorL.jpg',
                'harga' => 199900,
                'stok' => 90,
                'diskon' => 0.1,
                'deskripsi' => 'Kemeja lengan pendek dari viscose bermotif dengan kerah resort, bagian depan model French, yoke di bagian belakang.',
                'kategori_id' => 1,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Resor Bercorak',
                'foto_produk' => 'images/patterned.jpg',
                'harga' => 199900,
                'stok' => 76,
                'diskon' => 0.1,
                'deskripsi' => 'kemeja lengan pendek dari tenunan viskose bermotif dengan kerah lapel, plaket Prancis, dan kelim berpotongan lurus.',     
                'kategori_id' => 1,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Kemeja Katun',
                'foto_produk' => 'images/kemejakatunL.jpg',
                'harga' => 199900,
                'stok' => 50,
                'diskon' => 0.1,
                'deskripsi' => 'Kemeja lengan pendek bahan tenunan katun bermotif dengan kerah turn-down, classic front, dan pas bahu di bagian belakang. ',
                'kategori_id' => 1,
                'supplier_id' => 2
            ],
            [
                'nama_produk' => 'Round-neck T-shirt Regular Fit',
                'foto_produk' => 'images/roundneckL.jpg',
                'harga' => 99900,
                'stok' => 87,
                'diskon' => 0.5,
                'deskripsi' => 'Round-necked T-shirt in soft cotton jersey.',
                'kategori_id' => 1,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Jaket Kemeja Felt',
                'foto_produk' => 'images/jaketKemejaL.jpg',
                'harga' => 429900,
                'stok' => 75,
                'diskon' => 0.5,
                'deskripsi' => 'Jaket kemeja dengan bahan kain felt yang lembut dengan kerah dan kancing di bagian depan dan yoke di bagian belakang. ',
                'kategori_id' => 1,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Printed T-Shirt',
                'foto_produk' => 'images/printedL.jpg',
                'harga' => 169900,
                'stok' => 88,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft cotton jersey with a round neckline and a print motif.',
                'kategori_id' => 1,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Jaket Softshell Regular Fit',
                'foto_produk' => 'images/jacketL.jpg',
                'harga' => 599900,
                'stok' => 43,
                'diskon' => 0.6,
                'deskripsi' => 'Jaket dari kain fungsional yang tahan angin dan anti air yang dirancang untuk membuat Anda tetap kering selama hujan.',
                'kategori_id' => 1,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Jacquard-weave Cotton Jacket',
                'foto_produk' => 'images/jacquardL.jpg',
                'harga' => 999900,
                'stok' => 60,
                'diskon' => 0.6,
                'deskripsi' => 'An uncompromising collection made from more sustainable materials developed together with actor and innovator, John Boyega.', 
                'kategori_id' => 1,
                'supplier_id' => 2
            ],
            //Lelaki Anak-anak
            [
                'nama_produk' => 'Printed T-shirt A',
                'foto_produk' => 'images/pt1.jpg',
                'harga' => 99900,
                'stok' => 80,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Printed T-shirt B',
                'foto_produk' => 'images/pt2.jpg',
                'harga' => 99900,
                'stok' => 90,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Printed T-shirt C',
                'foto_produk' => 'images/pt3.jpg',
                'harga' => 99900,
                'stok' => 80,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Printed T-shirt D',
                'foto_produk' => 'images/pt4.jpg',
                'harga' => 99900,
                'stok' => 76,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Printed T-shirt E',
                'foto_produk' => 'images/pt5.jpg',
                'harga' => 99900,
                'stok' => 30,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 2
            ],
            [
                'nama_produk' => 'Printed T-shirt F',
                'foto_produk' => 'images/pt6.jpg',
                'harga' => 99900,
                'stok' => 18,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Printed T-shirt G',
                'foto_produk' => 'images/pt7.jpg',
                'harga' => 99900,
                'stok' => 56,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Printed T-shirt H',
                'foto_produk' => 'images/pt8.jpg',
                'harga' => 99900,
                'stok' => 40,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Printed T-shirt I',
                'foto_produk' => 'images/pt9.jpg',
                'harga' => 99900,
                'stok' => 34,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Printed T-shirt J',
                'foto_produk' => 'images/pt10.jpg',
                'harga' => 99900,
                'stok' => 65,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 2
            ],
            [
                'nama_produk' => 'Printed T-shirt K',
                'foto_produk' => 'images/pt11.jpg',
                'harga' => 99900,
                'stok' => 11,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Printed T-shirt L',
                'foto_produk' => 'images/pt12.jpg',
                'harga' => 99900,
                'stok' => 83,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Printed T-shirt M',
                'foto_produk' => 'images/pt13.jpg',
                'harga' => 99900,
                'stok' => 42,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Printed T-shirt N',
                'foto_produk' => 'images/pt14.jpg',
                'harga' => 99900,
                'stok' => 81,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Printed T-shirt O',
                'foto_produk' => 'images/pt15.jpg',
                'harga' => 99900,
                'stok' => 100,
                'diskon' => 0,
                'deskripsi' => 'T-shirt in soft, printed cotton jersey with a narrow trim around the neckline', 
                'kategori_id' => 2,
                'supplier_id' => 2
            ],
     
            //Perempuan Dewasa
            [
                'nama_produk' => 'Gaun V-neck',
                'foto_produk' => 'images/gaunvneckP.jpg',
                'harga' => 479900,
                'stok' => 10,
                'diskon' => 0.5,
                'deskripsi' => 'Gaun 3/4 dari bahan tenunan viscose. V-neck dalam di depan dan belakang dengan tali tipis yang diikat di belakang. Lengan panjang dengan karet tipis di bagian manset, jahitan kerut di bawah payudara dengan karet tipis di bagian belakang, dan rok yang melebar dengan lembut. Tanpa furing.',  
                'kategori_id' => 3,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Tie-belt Crêpe Dress',
                'foto_produk' => 'images/tie-beltP.jpg',
                'harga' => 549900,
                'stok' => 90,
                'diskon' => 0.1,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                'kategori_id' => 3,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Ribbed Top',
                'foto_produk' => 'images/ribbed-topP.jpg',
                'harga' => 379900,
                'stok' => 78,
                'diskon' => 0,
                'deskripsi' => 'Fitted top in ribbed jersey made from a cotton blend. Collar, buttons made from shell down the front and short raglan sleeves.',    
                'kategori_id' => 3,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Cotton-blend Shirt',
                'foto_produk' => 'images/cotton-blendShirtP.jpg',
                'harga' => 379900,
                'stok' => 10,
                'diskon' => 0.1,
                'deskripsi' => 'Long-sleeved shirt woven in a cotton blend with a collar and buttons down the front. Yoke at the back, buttoned cuffs and a rounded hem.',             
                'kategori_id' => 3,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Gaun Chiffon Panjang',
                'foto_produk' => 'images/gaunChifP.jpg',
                'harga' => 549900,
                'stok' => 10,
                'diskon' => 0.6,
                'deskripsi' => 'Gaun panjang yang melebar lembut dari chiffon airy dengan kerah kecil berumbai, bukaan berbentuk V di bagian depan dengan tali panjang dan pas bahu yang mengerut di bagian depan dan belakang',              
                'kategori_id' => 3,
                'supplier_id' => 2
            ],
            [
                'nama_produk' => 'Tie-belt Satin Dress',
                'foto_produk' => 'images/tie-beltsatinP.jpg',
                'harga' => 699900,
                'stok' => 50,
                'diskon' => 0.5,
                'deskripsi' => 'Calf-length dress in softly draping satin with a deep V-neck and a wrapover at the top of the front. Concealed zip in one side, 3/4-length, cuffed puff sleeves, and a seam with a wide tie belt at the waist. Unlined.',                         
                'kategori_id' => 3,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Atasan Berlengan Gembung',
                'foto_produk' => 'images/atasanGP.jpg',
                'harga' => 199900,
                'stok' => 40,
                'diskon' => 0,
                'deskripsi' => 'Atasan dari kain sweatshirt katun ringan dengan garis leher bulat, lengan puff pendek, dan rib di sekeliling garis leher, manset, dan kelim.',
                'kategori_id' => 3,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Atasan Bersalur Dengan Kerah',
                'foto_produk' => 'images/atasanBersalurP.jpg',
                'harga' => 299900,
                'stok' => 20,
                'diskon' => 0.1,
                'deskripsi' => 'Atasan lengan pendek dari jersey bersalur dengan kerah, kancing di bagian depan, applique',
                'kategori_id' => 3,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Sweatshirt',
                'foto_produk' => 'images/sweatshirt.jpg',
                'harga' => 200000,
                'stok' => 10,
                'diskon' => 0,
                'deskripsi' => 'Top in soft sweatshirt fabric made from a cotton blend with a round neckline and long raglan sleeves.',
                'kategori_id' => 3,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Gaun Kemeja',
                'foto_produk' => 'images/gaunKemejaP.jpg',
                'harga' => 449900,
                'stok' => 80,
                'diskon' => 0.6,
                'deskripsi' => 'Gaun 3/4 berbahan tenunan viscose blend dengan kerah, kancing di depan dan pas bahu dengan lipit di belakang. ',    
                'kategori_id' => 3,
                'supplier_id' => 2
            ],
            [
                'nama_produk' => 'Flounce-collared Blouse',
                'foto_produk' => 'images/flounceP.jpg',
                'harga' => 379900,
                'stok' => 100,
                'diskon' => 0.4,
                'deskripsi' => 'Blouse in an airy weave made from a lyocell blend with a wide, flounced collar and V-neck opening at the front with narrow ties. ',
                'kategori_id' => 3,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Blus Berhias Broderie',
                'foto_produk' => 'images/blusP.jpg',
                'harga' => 599900,
                'stok' => 70,
                'diskon' => 0.5,
                'deskripsi' => 'Blus lebar dari katun longgar dengan kerah tegak kecil berhias jumbai dan pas bahu broderie anglaise bentuk V yang berumbai. ',          
                'kategori_id' => 3,
                'supplier_id' => 4
            ],

            //Perempuan Anak
            [
                'nama_produk' => 'Patterned Jersey Dress A',
                'foto_produk' => 'images/pd1.jpg',
                'harga' => 99900,
                'stok' => 70,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress B',
                'foto_produk' => 'images/pd2.jpg',
                'harga' => 99900,
                'stok' => 60,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress C',
                'foto_produk' => 'images/pd3.jpg',
                'harga' => 99900,
                'stok' => 50,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 2
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress D',
                'foto_produk' => 'images/pd4.jpg',
                'harga' => 99900,
                'stok' => 40,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress E',
                'foto_produk' => 'images/pd5.jpg',
                'harga' => 99900,
                'stok' => 30,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress F',
                'foto_produk' => 'images/pd6.jpg',
                'harga' => 99900,
                'stok' => 20,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress G',
                'foto_produk' => 'images/pd7.jpg',
                'harga' => 99900,
                'stok' => 10,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 1
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress H',
                'foto_produk' => 'images/pd8.jpg',
                'harga' => 99900,
                'stok' => 51,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 2
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress I',
                'foto_produk' => 'images/pd9.jpg',
                'harga' => 99900,
                'stok' => 98,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 3
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress J',
                'foto_produk' => 'images/pd10.jpg',
                'harga' => 99900,
                'stok' => 54,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 4
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress K',
                'foto_produk' => 'images/pd11.jpg',
                'harga' => 99900,
                'stok' => 64,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 5
            ],
            [
                'nama_produk' => 'Patterned Jersey Dress L',
                'foto_produk' => 'images/pd12.jpg',
                'harga' => 99900,
                'stok' => 100,
                'diskon' => 0,
                'deskripsi' => 'Sleeveless dress in patterned cotton jersey with a gathered seam at the waist and flared skirt.',          
                'kategori_id' => 4,
                'supplier_id' => 1
            ],
            ]);
    }
}
