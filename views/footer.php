<section class="wrapper">
        <footer class="">
            <section class="cocau">
                <h1>Cơ cấu tổ chức</h1>
                <ul>
                    <li>Người chịu trách nghiệm:<b> Lê Thành Thông - Giám đốc</b></li>
                    <li>Phàn nàn dịch vụ: 0862069563</li>
                    <li>Kinh doanh: 0862069563</li>
                    <li>Hỗ trợ kĩ thuật: 0862069563</li>
                </ul>
            </section>
            <section class="lienhe">
                <h1>Liên hệ</h1>
                <p>Số điện thoại: 0862069563</p>

            </section>
        </footer>
    </section>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>