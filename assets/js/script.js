$(document).ready(function() {
    //Ấn Learn more form dtm
    $(".me-fix-dtm #learn-more").click(function() {
        $(".me-fix-dtm").hide();
    });

    //Ẩn form login khi load
    //Click nút đăng nhập trên nav
    $(".btnDangNhap").click(function() {
        $(".me-form-login").toggle();
    });

    //Click Chat
    $(".me-open-button").click(function() {
        $("#myForm").show();
        $(this).hide();
    });
    $("#myForm .cancel").click(function() {
        $("#myForm").hide();
        $(".me-open-button").show();
    });

    //Sửa đổi thông tin cá nhân
    $(".hide-update").hide();
    $("#me-setting-ttcn").click(function() {
        $(".hide-update").toggle();
    });

    // Home
    $('.D_carousel').owlCarousel({
        loop: true,
        nav: true,
        navText: [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>'
        ],
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    //back-to-top
    var scrollTrigger = 400, // px
        backToTop = function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').show();
            } else {
                $('#back-to-top').hide();
            }
        };
    backToTop();
    $(window).on('scroll', function() {
        backToTop();
    });
    $('#back-to-top').on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
    $('.btn-close').click(function() {
        $(".me-form-login").hide();
    })
    $('.fa-bars').click(function() {
        $(".inner-menu").css("width", "90%");
        $(".inner-menu").toggle();
        $(".D_modal").show();
    })
    $('.D_modal').click(function() {
        $(this).css("display", "none");
        $(".inner-menu").hide();
    })
    var changeMenu = document.getElementsByClassName('search__menu-mb fa-search');
    var changeMenu = document.querySelector('.search__menu-mb .fa-search');
    changeMenu.addEventListener("click", function() {
        this.classList.toggle('fa-times');
        $(".search-mb").slideToggle("slow");
    });


    var base_url = window.location.origin;
    var provinceBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/Province.json';
    $.getJSON(provinceBase_url, function(data) {
        $.each(data, function(index, value) {
            //console.log(index);
            $('#selTinhThanhPhoAddHsxt').append('<option value="' + value.CityName + '">' + value.CityName + '</option>');
            $('#seltinhthanhphocsdt').append('<option value="' + value.CityName + '">' + value.CityName + '</option>');
            $('#selNoiSinhAddHsxt').append('<option value="' + value.CityName + '">' + value.CityName + '</option>');
            $('#selTinhThanhPhoLop10AddHsxt').append('<option value="' + value.CityName + '">' + value.CityName + '</option>');
            $('#selTinhThanhPhoLop11AddHsxt').append('<option value="' + value.CityName + '">' + value.CityName + '</option>');
            $('#selTinhThanhPhoLop12AddHsxt').append('<option value="' + value.CityName + '">' + value.CityName + '</option>');
        });
    });
    var enthicBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/enthic.json';
    $.getJSON(enthicBase_url, function(data) {
        $.each(data, function(index, value) {
            for (i in value) {
                //console.log(value[i].TEN);    
                //$('#sel2').append('<option value="' + value[i].code + '">' + value[i].TEN + '</option>');
                $('#selDanTocAddHsxt').append('<option value="' + value[i].TEN + '">' + value[i].TEN + '</option>');
            }
        });
    });

    $('#selTinhThanhPhoAddHsxt').change(function() {
        //console.log("afdasdfa");
        //$("#selquanhuyencsdt").val([]);
        //$("#selquanhuyencsdt").val();
        var select = document.getElementById("selQuanHuyenAddHsxt");
        var length = select.options.length;
        for (i = length - 1; i >= 0; i--) {
            select.options[i] = null;
        }
        //document.getElementById("selquanhuyencsdt").empty();
        var districtBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/District.json';
        var selTinhThanhPhoAddHsxtValue = selTinhThanhPhoAddHsxt.value;
        //console.log(seltinhthanhphocsdtValue);
        $.getJSON(districtBase_url, function(data) {
            var code = [];
            $.each(data, function(index, value) {
                if (value.CityName == selTinhThanhPhoAddHsxtValue) {
                    //console.log(value.DistrictName);
                    $('#selQuanHuyenAddHsxt').append('<option value="' + value.DistrictName + '">' + value.DistrictName + '</option>');

                }
            });
        });
    });

    $('#selTinhThanhPhoLop10AddHsxt').change(function() {
        var select = document.getElementById("selQuanHuyenLop10AddHsxt");
        var length = select.options.length;
        for (i = length - 1; i >= 0; i--) {
            select.options[i] = null;
        }

        var districtBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/District.json';
        var selTinhThanhPhoLop10AddHsxtValue = selTinhThanhPhoLop10AddHsxt.value;

        $.getJSON(districtBase_url, function(data) {
            var code = [];
            $.each(data, function(index, value) {
                if (value.CityName == selTinhThanhPhoLop10AddHsxtValue) {

                    $('#selQuanHuyenLop10AddHsxt').append('<option value="' + value.DistrictName + '">' + value.DistrictName + '</option>');

                }
            });
        });
    });

    $('#selQuanHuyenLop10AddHsxt').change(function() {

        var select = document.getElementById("selTruongThptLop10AddHsxt");
        var length = select.options.length;
        for (i = length - 1; i >= 0; i--) {
            select.options[i] = null;
        }
        //document.getElementById("selquanhuyencsdt").empty();
        var schoolBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/School.json';
        var selQuanHuyenLop10AddHsxtValue = selQuanHuyenLop10AddHsxt.value;
        //console.log(seltinhthanhphocsdtValue);
        $.getJSON(schoolBase_url, function(data) {
            var code = [];
            $.each(data, function(index, value) {
                if (value.DistrictName == selQuanHuyenLop10AddHsxtValue) {
                    //console.log(value.SchoolName);
                    $('#selTruongThptLop10AddHsxt').append('<option value="' + value.SchoolName + '">' + value.SchoolName + '</option>');

                }
            });
        });
    });

    $('#selTinhThanhPhoLop11AddHsxt').change(function() {
        var select = document.getElementById("selQuanHuyenLop11AddHsxt");
        var length = select.options.length;
        for (i = length - 1; i >= 0; i--) {
            select.options[i] = null;
        }
        var districtBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/District.json';
        var selTinhThanhPhoLop11AddHsxtValue = selTinhThanhPhoLop11AddHsxt.value;

        $.getJSON(districtBase_url, function(data) {
            var code = [];
            $.each(data, function(index, value) {
                if (value.CityName == selTinhThanhPhoLop11AddHsxtValue) {

                    $('#selQuanHuyenLop11AddHsxt').append('<option value="' + value.DistrictName + '">' + value.DistrictName + '</option>');

                }
            });
        });
    });

    $('#selQuanHuyenLop11AddHsxt').change(function() {

        var select = document.getElementById("selTruongThptLop11AddHsxt");
        var length = select.options.length;
        for (i = length - 1; i >= 0; i--) {
            select.options[i] = null;
        }

        var schoolBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/School.json';
        var selQuanHuyenLop11AddHsxtValue = selQuanHuyenLop11AddHsxt.value;

        $.getJSON(schoolBase_url, function(data) {
            var code = [];
            $.each(data, function(index, value) {
                if (value.DistrictName == selQuanHuyenLop11AddHsxtValue) {

                    $('#selTruongThptLop11AddHsxt').append('<option value="' + value.SchoolName + '">' + value.SchoolName + '</option>');

                }
            });
        });
    });

    $('#selTinhThanhPhoLop12AddHsxt').change(function() {
        var select = document.getElementById("selQuanHuyenLop12AddHsxt");
        var length = select.options.length;
        for (i = length - 1; i >= 0; i--) {
            select.options[i] = null;
        }
        var districtBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/District.json';
        var selTinhThanhPhoLop12AddHsxtValue = selTinhThanhPhoLop12AddHsxt.value;

        $.getJSON(districtBase_url, function(data) {
            var code = [];
            $.each(data, function(index, value) {
                if (value.CityName == selTinhThanhPhoLop12AddHsxtValue) {

                    $('#selQuanHuyenLop12AddHsxt').append('<option value="' + value.DistrictName + '">' + value.DistrictName + '</option>');

                }
            });
        });
    });

    $('#selQuanHuyenLop12AddHsxt').change(function() {

        var select = document.getElementById("selTruongThptLop12AddHsxt");
        var length = select.options.length;
        for (i = length - 1; i >= 0; i--) {
            select.options[i] = null;
        }

        var schoolBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/School.json';
        var selQuanHuyenLop12AddHsxtValue = selQuanHuyenLop12AddHsxt.value;

        $.getJSON(schoolBase_url, function(data) {
            var code = [];
            $.each(data, function(index, value) {
                if (value.DistrictName == selQuanHuyenLop12AddHsxtValue) {

                    $('#selTruongThptLop12AddHsxt').append('<option value="' + value.SchoolName + '">' + value.SchoolName + '</option>');

                }
            });
        });
    });


    $("#themnguyenvongdangky").click(function() {
        var text = $(this).text();
        if (text === "+Thêm nguyện vọng đăng ký") {
            $(this).text("-Hủy nguyện vọng đăng ký");
            $("#searchContent").show();
            $('#thongtindangkyxettuyen').show();
        } else {
            $(this).text("+Thêm nguyện vọng đăng ký");
            $("#searchContent").hide();
        }
    });

    $("#labelnopkemfileminhchung").click(function() {
        var text = $(this).text();
        if (text === "+Nộp kèm file minh chứng và hoàn thành hồ sơ") {
            $(this).text("-Nộp kèm file minh chứng và hoàn thành hồ sơ");
            //$("#searchContent").show();
            $('#nopkemfileminhchungDiv').show();
        } else {
            $(this).text("+Nộp kèm file minh chứng và hoàn thành hồ sơ");
            $("#nopkemfileminhchungDiv").hide();
        }
    });

    $('#nhomnganhxettuyen').change(function() {
        //console.log(nhomnganhxettuyen.value);

        document.getElementById("maxettuyen").value = nhomnganhxettuyen.value;

        // $date = "123";
        // $.ajax({
        //     url: './admin/add_hsxt/x', 
        //     type: "POST",
        //     dataType:'text', 
        //     data: ({'date': $date}),
        //     success: function(data){
        //         console.log($date);
        //     }
        // }); 
    });

    var CombinSubjectBase_url = base_url + '/CongTuyenSinhDHTL/Sources/assets/json/CombinSubject.json';

    $('#tohopxettuyen').change(function() {

        //var tohopxettuyenAddHsxtValue =tohopxettuyen.value;
        var indexMon = 1;
        $.getJSON(CombinSubjectBase_url, function(data) {
            $.each(data, function(index, value) {
                //console.log(value.CombinCode);
                if (value.CombinCode == tohopxettuyen.value) {
                    console.log(value.SubjectCode);
                    //$('#mon1').value=value.SubjectCode;
                    document.getElementById("mon" + indexMon).innerHTML = value.SubjectCode;
                    document.getElementById("monlop11" + indexMon).innerHTML = value.SubjectCode;
                    document.getElementById("monlop12" + indexMon).innerHTML = value.SubjectCode;
                    indexMon++;
                }
            });
        });
    });


    var btnNguyenVong = $("#btnNguyenVong");
    $(btnNguyenVong).click(function(e) {
        e.preventDefault();
        var url = base_url + "/CongTuyenSinhDHTL/Sources/index.php/home/pro_add_nguyen_vong";
        //console.log("Nhay vao day: " + url);
        var csdt_edit_ts = $("#csdt_edit_ts").val();
        //console.log(csdt_edit_ts);
        var tennguyenvong = $("#tennguyenvong").val();
        //console.log(tennguyenvong);
        var nhomnganhxettuyen = $("#nhomnganhxettuyen").val();
        //console.log(nhomnganhxettuyen);
        var tohopxettuyen = $("#tohopxettuyen").val();
        //console.log(tohopxettuyen);
        var ma_hsxt = $("#ma_hsxt").val();
        console.log(ma_hsxt);
        $.ajax({
            url: '' + url + '', // gọi đến file server articles.php để xử lý;
            data: { ma_hsxt: ma_hsxt, tennguyenvong: tennguyenvong, nhomnganhxettuyen: nhomnganhxettuyen, csdt_edit_ts: csdt_edit_ts, tohopxettuyen: tohopxettuyen }, //lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
            type: 'POST', // phương thức dữ liệu được truyền đi
            datatype: 'json', // định dạng dữ liệu trả về là json
            success: function(data) { //kết quả trả về từ server nếu gửi thành công
                // alert("cc")
                //   var option = "";
                $.each($.parseJSON(data), function(key, value) {
                    //option += "<option value='"+value['id']+"'>"+value['title']+"</option>"
                    //console.log(value.length);
                    // var 
                    for (var key in value) {
                        //if (key=='tennguyenvong')
                        console.log(key);
                    }
                    $('#myTable').append("<tr><td>" + value['ten_nguyen_vong'] + "</td><td>" + value['ma_ndt'] + "</td><td>" + value['ma_thm'] + "</td><td>" + value['trang_thai'] + "</td></tr>");
                    //console.log(value[tennguyenvong]);
                })

                //console.log(data['tennguyenvong']);
                //   $("#sub_category").html(option);
                //console.log(data);
                // $.each($.parseJSON(data),function(key, value){
                //         console.log(key+" "+value);
                // })
                //$(table).append("<tr><th>x</th><th>Mã xét tuyển</th><th>Tổ hợp xét tuyển</th><th>Trạng thái</th><th>#</th></tr>");
                //
                // var row = 
                // "<th>$x</th><th>Mã xét tuyển</th><th>Tổ hợp xét tuyển</th><th>Trạng thái</th><th>#</th>"

                //     //Add row
                //     table.append(row.compose({
                //         'id': 3,
                //         'name': 'Lee',
                //         'phone': '123 456 789'
                //     }));
                //console.log(data);
                // ĐỌc dữ liệu
                $("#form_file_minh_chung").show();
            }
        });
    });


    var form_minh_chung = $("#form_minh_chung");

    var btn_luu_file_minh_chung = $("#btn_luu_file_minh_chung");

    var countXM = 1;

    $(btn_luu_file_minh_chung).click(function(e) {
        e.preventDefault();
        var url = base_url + "/CongTuyenSinhDHTL/Sources/index.php/home/pro_luu_file_minh_chung";
        console.log("Nhay vao day: " + url);

        var inputFile = $("input[name=file]");
        //console.log(inputFile);

        var fileToUpLoad = inputFile[0].files[0];
        //console.log(fileToUpLoad);

        var formData = new FormData();
        formData.append("file", fileToUpLoad);
        var ma_hsxt = $("#ma_hsxt").val();
        formData.append("ma_hsxt", ma_hsxt);

        jQuery.ajax({
            type: "POST",
            url: url,
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                //console.log(data);
                $.each($.parseJSON(data), function(key, value) {
                    //console.log(key + ": " + value);
                    if (key == "status" && value == "success") {
                        console.log("File successfully uploaded");

                        //console.log(fileToUpLoad);
                        console.log("name: " + fileToUpLoad["name"]);
                        console.log("size: " + fileToUpLoad["size"] + " byte");

                        $(form_minh_chung).append('<tr><td>' + countXM++ + '</td><td><input type="text" max="100" class="form-control" ng-model="file.FileDescription" placeholder="Mô tả"></td><td>' + fileToUpLoad["name"] + '</td><td>' + fileToUpLoad["size"] + 'byte</td><td><a href="" class="text-red" title="Xóa file"><i class="fa fa-trash-o"></i></a></td></tr>');
                    }


                    // Mở nút hoàn thành
                    $("#btnHoanThanhHS").show();

                });
            }
        });
    });
    // $("#btn_save-tt").click(function(){
    //     var elem = document.getElementsByClassName("num");
    //     $(elem).css({"width":"25%","color": "#4CAF50","font-weight":"700"});

    // })
    // $("#btn_save-tt").addEventListener('click',function(){

    // })
});