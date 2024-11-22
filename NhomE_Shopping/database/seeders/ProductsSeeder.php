<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['id' => 19, 'name' => 'Ghế Sofa da', 'alias' => 'ghe-sofa-da', 'price' => 900000, 'quantity' => 23, 'categoryId' => 73, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => '', 'created_at' => '2024-10-08 12:03:13', 'updated_at' => '2024-10-08 12:03:13', 'description' => 'Sản phẩm ghế Sofa', 'ownerId' => 2, 'images' => '7200018-w63-82xh62-78.jpg', 'content' => '<p>Sản phảm ghế đơn<br></p>', 'discount' => 600000, 'isdiscount' => 'checked'],
            ['id' => 20, 'name' => 'Ghế đơn', 'alias' => 'ghe-don', 'price' => 120000, 'quantity' => 30, 'categoryId' => 72, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-10 00:42:15', 'updated_at' => '2024-10-18 18:36:02', 'description' => 'Sản phảm ghế đơn', 'ownerId' => 3, 'images' => '6000191_1.jpg', 'content' => 'Sản phảm ghế đơn', 'discount' => 100000, 'isdiscount' => 'checked'],
            ['id' => 21, 'name' => 'Ghế Sofa dài', 'alias' => 'ghe-sofa-dai', 'price' => 900000, 'quantity' => 300, 'categoryId' => 72, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-10 00:42:49', 'updated_at' => '2024-10-10 00:42:49', 'description' => 'Ghế Sofa dài', 'ownerId' => 2, 'images' => 'chester_sofa_baya_5298.jpg', 'content' => '<p>Ghế Sofa dài<br></p>', 'discount' => 800000, 'isdiscount' => 'checked'],
            ['id' => 22, 'name' => 'Thùng đựng đồ', 'alias' => 'thung-dung-do', 'price' => 900000, 'quantity' => 23, 'categoryId' => 73, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-10 00:43:28', 'updated_at' => '2024-10-16 23:15:44', 'description' => 'Bộ bàn ăn', 'ownerId' => 2, 'images' => 'april_storage_box_baya_7300169.jpg', 'content' => '<p>Bộ bàn ăn<br></p>', 'discount' => 750000, 'isdiscount' => 'checked'],
            ['id' => 23, 'name' => 'Bàn làm việc', 'alias' => 'ban-lam-viec', 'price' => 120000, 'quantity' => 23, 'categoryId' => 73, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-16 23:24:25', 'updated_at' => '2024-10-18 19:21:38', 'description' => 'Sản phẩm bàn làm việc', 'ownerId' => 4, 'images' => 'ban-laptop-figaro-1703-baya.vn.jpg', 'content' => 'Sản phẩm bàn làm việc', 'discount' => NULL, 'isdiscount' => 'checked'],
            ['id' => 24, 'name' => 'KỆ SÁCH SUND', 'alias' => 'ke-sach-sund', 'price' => 900000, 'quantity' => 30, 'categoryId' => 72, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-17 01:59:57', 'updated_at' => '2024-10-18 18:39:16', 'description' => 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 'ownerId' => 2, 'images' => 'joy_children_bookshelf_baya_2000421.jpg', 'content' => 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 'discount' => 100000, 'isdiscount' => 'checked'],
            ['id' => 25, 'name' => 'Tủ đựng đồ', 'alias' => 'tu-dung-do', 'price' => 900000, 'quantity' => 30, 'categoryId' => 72, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-18 19:14:52', 'updated_at' => '2024-10-18 19:21:48', 'description' => 'Tủ đựng đồ đa năng', 'ownerId' => 3, 'images' => 'tudungdodanang.jpg', 'content' => 'Tủ đựng đồ đa năng, phù hợp với mọi không gian.', 'discount' => NULL, 'isdiscount' => 'checked'],
            ['id' => 26, 'name' => 'Bàn làm việc đa năng', 'alias' => 'ban-lam-viec-da-nang', 'price' => 200000, 'quantity' => 25, 'categoryId' => 74, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => '', 'created_at' => '2024-10-18 19:17:37', 'updated_at' => '2024-10-18 19:20:55', 'description' => 'Bàn làm việc đa năng có thể điều chỉnh độ cao', 'ownerId' => 1, 'images' => 'banlamviecdanang.jpg', 'content' => 'Bàn làm việc có thể thay đổi độ cao, linh hoạt cho công việc của bạn.', 'discount' => 150000, 'isdiscount' => 'checked'],
            ['id' => 27, 'name' => 'Tủ sách tiện lợi', 'alias' => 'tu-sach-tien-loi', 'price' => 300000, 'quantity' => 50, 'categoryId' => 75, 'viewcount' => 1, 'homeflag' => '', 'hotflag' => 'checked', 'created_at' => '2024-10-18 19:21:12', 'updated_at' => '2024-10-18 19:23:30', 'description' => 'Tủ sách tiện lợi với nhiều ngăn lưu trữ', 'ownerId' => 2, 'images' => 'tusachtienloi.jpg', 'content' => 'Tủ sách tiện lợi với thiết kế tối giản nhưng vẫn đảm bảo tính năng lưu trữ.', 'discount' => 250000, 'isdiscount' => 'checked'],
            ['id' => 28, 'name' => 'Ghế văn phòng', 'alias' => 'ghe-van-phong', 'price' => 500000, 'quantity' => 50, 'categoryId' => 76, 'viewcount' => 1, 'homeflag' => '', 'hotflag' => '', 'created_at' => '2024-10-18 19:23:48', 'updated_at' => '2024-10-18 19:25:05', 'description' => 'Ghế văn phòng thoải mái, phù hợp cho công việc dài giờ', 'ownerId' => 4, 'images' => 'ghevanphong.jpg', 'content' => 'Ghế văn phòng với tựa lưng êm ái và điều chỉnh độ cao linh hoạt.', 'discount' => NULL, 'isdiscount' => 'checked'],
            ['id' => 29, 'name' => 'Bàn ăn gỗ', 'alias' => 'ban-an-go', 'price' => 800000, 'quantity' => 60, 'categoryId' => 77, 'viewcount' => 1, 'homeflag' => '', 'hotflag' => 'checked', 'created_at' => '2024-10-18 19:28:04', 'updated_at' => '2024-10-18 19:29:08', 'description' => 'Bàn ăn gỗ đẹp và chắc chắn', 'ownerId' => 3, 'images' => 'banango.jpg', 'content' => 'Bàn ăn gỗ chắc chắn, phù hợp với không gian gia đình.', 'discount' => NULL, 'isdiscount' => 'checked'],
            ['id' => 30, 'name' => 'Ghế ăn', 'alias' => 'ghe-an', 'price' => 400000, 'quantity' => 100, 'categoryId' => 78, 'viewcount' => 1, 'homeflag' => '', 'hotflag' => '', 'created_at' => '2024-10-18 19:32:51', 'updated_at' => '2024-10-18 19:33:28', 'description' => 'Ghế ăn gỗ cao cấp', 'ownerId' => 2, 'images' => 'ghegoan.jpg', 'content' => 'Ghế ăn gỗ cao cấp, bền và thoải mái.', 'discount' => NULL, 'isdiscount' => 'checked'],
            ['id' => 31, 'name' => 'Tủ quần áo', 'alias' => 'tu-quan-ao', 'price' => 1800000, 'quantity' => 23, 'categoryId' => 72, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-23 11:40:32', 'updated_at' => '2024-10-23 11:40:32', 'description' => 'Tủ quần áo', 'ownerId' => 2, 'images' => 'sund_bookcase_baya_2000444.jpg', 'content' => '<p>Tủ quần áo<br></p>', 'discount' => 1500000, 'isdiscount' => 'checked'],
            ['id' => 32, 'name' => 'Giường harris', 'alias' => 'giuong-harris', 'price' => 900000, 'quantity' => 23, 'categoryId' => 73, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => '', 'created_at' => '2024-10-23 11:43:31', 'updated_at' => '2024-10-23 11:43:31', 'description' => 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 'ownerId' => 5, 'images' => 'giuong-harris-1028485-1-baya.vn_2.jpg', 'content' => '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.<br></p>', 'discount' => 100000, 'isdiscount' => 'checked'],
            ['id' => 33, 'name' => 'Giường Ali', 'alias' => 'giuong-ali', 'price' => 2000000, 'quantity' => 30, 'categoryId' => 72, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-23 11:44:15', 'updated_at' => '2024-10-23 11:44:15', 'description' => 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 'ownerId' => 6, 'images' => 'giuong-ali-1000412-1-baya.vn.jpg', 'content' => '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.<br></p>', 'discount' => 1800000, 'isdiscount' => 'checked'],
            ['id' => 34, 'name' => 'Giường Albany', 'alias' => 'giuong-albany', 'price' => 2000000, 'quantity' => 23, 'categoryId' => 72, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => '', 'created_at' => '2024-10-23 11:45:02', 'updated_at' => '2024-10-23 11:45:02', 'description' => 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 'ownerId' => 6, 'images' => 'albany_bed_baya_5045.jpg', 'content' => '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.<br></p>', 'discount' => 1800000, 'isdiscount' => 'checked'],
            ['id' => 35, 'name' => 'Ghế Sofa da', 'alias' => 'ghe-sofa-da', 'price' => 2000000, 'quantity' => 30, 'categoryId' => 74, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-22 08:35:02', 'updated_at' => '2024-10-22 08:35:02', 'description' => 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 'ownerId' => 3, 'images' => 'BERNIE_Bed_with_drawers_Natural_Melamine_UMA_1053852_1053876_corner_1_.jpg', 'content' => '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.</p>', 'discount' => 1800000, 'isdiscount' => 'checked'],
            ['id' => 37, 'name' => 'Ghế Sofa da', 'alias' => 'ghe-sofa-da', 'price' => 200000, 'quantity' => 23, 'categoryId' => 84, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-05-22 08:36:22', 'updated_at' => '2024-05-22 08:36:28', 'description' => 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 'ownerId' => 2, 'images' => 'emma_bed_baya_5224_1_1.jpg', 'content' => '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.<br></p>', 'discount' => 1800000, 'isdiscount' => 'checked'],
            ['id' => 38, 'name' => 'Ghế trang trí', 'alias' => 'ghe-trang-tri', 'price' => 2000000, 'quantity' => 300, 'categoryId' => 72, 'viewcount' => 1, 'homeflag' => 'checked', 'hotflag' => 'checked', 'created_at' => '2024-10-16 08:05:37', 'updated_at' => '2024-10-16 08:05:37', 'description' => 'Ghế trang trí', 'ownerId' => 3, 'images' => '12.jpg', 'content' => '<p>Ghế trang trí<br></p>', 'discount' => 1800000, 'isdiscount' => 'checked']
        ]);
    }
}
