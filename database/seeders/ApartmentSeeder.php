<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();

        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'name' => 'Chung cu 1',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 2',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 3',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 4',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 5',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 6',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 7',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 8',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 9',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 10',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 11',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 12',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 13',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 14',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 15',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 16',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 17',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 18',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 19',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chung cu 20',
                'address' => 'Ha Noi',
                'price' => '20000',
                'description' => 'Chung cu nam doi dien benh vien Ha Noi',
                'detail' => 'Chung cu 1 Mễ Trì toạ lạc ngay trung tâm phía tây thành phố - giao lộ "vàng" của các tuyến đường trọng điểm phía Tây là Lê Quang Đạo và Mễ Trì.
Dự án nằm trong khu vực trung tâm hành chính – kinh tế – văn hóa hàng đầu của Hà Nội, kết nối với nhiều tuyến đường huyết mạch như Phạm Hùng, Xuân Thủy, Đại lộ Thăng Long, Lê Đức Thọ, Hồ Tùng Mậu,…. và thừa hưởng trọn vẹn hạ tầng giao thông hiện đại, quy hoạch đồng bộ, hạ tầng xã hội phát triển của khu vực Mỹ Đình.',
                'thumbnail' => 'http://media.kinhtedothi.vn//2020/04/29/chung_cu_2.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
