<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=0.33">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Tin tức - Thế giới điện thoại</title>
  <link rel="shortcut icon" href="img/favicon.ico" />

  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <!-- our files -->
  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/topnav.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/taikhoan.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/tintuc.css" />

  <!-- js -->
  <script src="data/products.js"></script>


  <script src="./js/dungchung.js"></script>

  <script src="./js/classes.js"></script>
  <script src="./js/trangchu.js"></script>
  <style>

  </style>

</head>

<body>
  <script>
   window.onload = async function () {
  // Chờ đợi dữ liệu được tải về
  await dataPromise;
      khoiTao();
      tintuc()
      // thêm tags (từ khóa) vào khung tìm kiếm
      var tags = ["Samsung", "iPhone", "Huawei", "Oppo", "Mobi"];
      for (var t of tags) addTags(t, "index.php?search=" + t);
    };
  </script>
  <script>
    addTopNav();
  </script>

  <section style="min-height: 100vh">
    <script>
      addHeader();
    </script>

    <div class="video">
      <div class="video-1">
        <iframe width="560" height="315"
          src="https://www.youtube.com/embed/iWHPniNYpFM?si=ZNd_qUOTgFxKFe9d&autoplay=1&mute=1"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
      <div class="video-2">
        <a href="https://video.vnexpress.net/trai-nghiem-cac-nang-cap-tren-iphone-15-pro-max-4652592.html">
          <h2 style="margin-bottom: 10px;">Trải nghiệm các nâng cấp trên iPhone 15 Pro Max</h2>
        </a>
        <div class="category" style="margin-bottom: 10px;">
          <a href="#"><span>vnexpress&nbsp;</span></a>
          <span class="time">&middot;&nbsp;14 giờ trước</span>
        </div>
        <p style="margin-bottom: 15px;line-height: 1.5;">Ngoài lớp vỏ bằng titanium, USB-C tốc độ cao, iPhone 15 Pro Max
          còn có camera
          với zoom quang 5x khác biệt so
          với bản iPhone 15 Pro.Chuyên gia Trần Xuân Vinh dự đoán Apple ra mắt model hoàn toàn mới là iPhone 15 Ultra và
          giúp thị trường smartphone cao cấp sôi động trở lại.Bộ bốn iPhone 15 sẽ được bán tại Việt Nam từ 29/9 thay vì
          giữa tháng 10 như năm ngoái, cao nhất 47 triệu đồng.</p>
        <p class="reporter" style="margin-bottom: 15px;">Tuấn Hưng (từ Apple Park)</p>
        <div class="related" style="margin-bottom: 40px;">
          <a href="#"><button>Số hóa</button></a>
          <a href="#"><button>Điện thoại</button></a>
          <a href="#"><button>Iphone</button></a>
          <a href="#"><i class="fas fa-plus-circle"></i></a>
        </div>
        <div class="interactive" style="margin-bottom: 15px;">
          <a href="#"><i class="far fa-thumbs-up"></i>10</a>
          <a href="#"><i class="far fa-comment-alt"></i> Viết bình luận</a>
          <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>
        <div class="comment">
          <input type="text" name="comment" placeholder="Viết bình luận của bạn">
        </div>
      </div>
    </div>
    <hr>

    <div class="body-tintuc" id="body-tintuc"></div>
  </section>
  <script>

  </script>
  <script>
    addContainTaiKhoan();
    addChatbot()
  </script>

  <div class="footer">
    <script>
      addFooter();
    </script>
  </div>

  <i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
</body>

</html>