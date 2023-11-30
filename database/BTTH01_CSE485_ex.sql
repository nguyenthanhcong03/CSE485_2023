CREATE TABLE USERS(
		UserID VARCHAR(30) UNIQUE NOT NULL,
		Pass VARCHAR(30) NOT NULL
);

/*a.  Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình*/

SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, baiviet.noidung
FROM baiviet
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = 'Nhạc trữ tình';

/*b.  Liệt kê các bài viết của tác giả “Nhacvietplus”*/

SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, baiviet.noidung
FROM baiviet
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus';

/*c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào*/

SELECT theloai.ma_tloai, theloai.ten_tloai
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_bviet IS NULL;

/*d.  Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên 
thể loại, ngày viết.*/
SELECT
    baiviet.ma_bviet AS 'Mã Bài Viết',
    baiviet.tieude AS 'Tên Bài Viết',
    baiviet.ten_bhat AS 'Tên Bài Hát',
    tacgia.ten_tgia AS 'Tên Tác Giả',
    theloai.ten_tloai AS 'Tên Thể Loại',
    baiviet.ngayviet AS 'Ngày Viết'
FROM
    baiviet
JOIN
    tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
JOIN
    theloai ON baiviet.ma_tloai = theloai.ma_tloai;

/*e. Tìm thể loại có số bài viết nhiều nhất */
SELECT
    theloai.ten_tloai AS 'Tên Thể Loại',
    COUNT(baiviet.ma_bviet) AS 'Số Bài Viết'
FROM
    theloai
LEFT JOIN
    baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY
    theloai.ma_tloai
ORDER BY
    COUNT(baiviet.ma_bviet) DESC
LIMIT 1;

/*f. Liệt kê 2 tác giả có số bài viết nhiều nhất*/
SELECT
    tacgia.ten_tgia AS 'Tên Tác Giả',
    COUNT(baiviet.ma_bviet) AS 'Số Bài Viết'
FROM
    tacgia
LEFT JOIN
    baiviet ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY
    tacgia.ma_tgia
ORDER BY
    COUNT(baiviet.ma_bviet) DESC
LIMIT 2;

/*g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”*/

SELECT * 
FROM baiviet AS BV 
WHERE BV.ten_bhat LIKE '%yêu%' OR BV.ten_bhat LIKE '%thương%' or BV.ten_bhat LIKE '%anh%' or BV.ten_bhat LIKE '%em%';


/*h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”*/

SELECT * 
FROM baiviet AS BV 
WHERE BV.ten_bhat LIKE '%yêu%' OR BV.ten_bhat LIKE '%thương%' or BV.ten_bhat LIKE '%anh%' or BV.ten_bhat LIKE '%em%'
      OR BV.tieude LIKE '%yêu%' OR BV.tieude LIKE '%thương%' or BV.tieude LIKE '%anh%' or BV.tieude LIKE '%em%'
      
      
/*l. Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng Đăng nhập/Quản trị trang web.*/

CREATE TABLE USERS(
		UserID VARCHAR(30) UNIQUE NOT NULL,
		Pass VARCHAR(30) NOT NULL
);