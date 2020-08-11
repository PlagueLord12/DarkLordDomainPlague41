<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <style>
        .hero-icon {
            height: 24px;
            width: 24px;
            border: 2px solid #000;
            border-radius: 50%;
            margin-right: 10px;
            background: #fff;
        }

        .arti-icon {
            height: 24px;
            width: auto;
            margin-right: 10px;
        }

        .table-enemy .hero-icon {
            border-color: red;
        }

        input[type=number] {
            width: 90px;
        }

        .table span {
            line-height: 36px;
        }

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100%;
        }

        .w72 {
            width: 72px;
        }

        .tooltipf {
            position: relative;
            display: inline-block;
        }

        .tooltipf .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltipf .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltipf:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        body.dark-theme {
            background: #2f3136;
            color: #FFFFFF;
        }

        body.dark-theme .list-group-item {
            background: #36393f;
        }

        body.dark-theme .btn-light {
            background: #393c43;
            border-color: #444951;
            color: #FFFFFF;
        }

        body.dark-theme .form-control {
            border: 1px solid #444951;
            background: transparent;
            color: #FFFFFF;
        }

        body.dark-theme .hero-icon {
            border: 2px solid #444951;
        }

        body.dark-theme .input-group-text {
            background: #363a40;
            color: #FFFFFF;
            border: 1px solid #444951;
        }

        body.dark-theme .btn-outline-secondary {
            color: #f5f5f5;
            background-color: #393c43;
            /*border-color: #393c43;*/
        }

        body.dark-theme .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        body.dark-theme .dropdown-menu {
            color: #fff;
            background: #40444b;
        }

        body.dark-theme .dropdown-item {
            color: #f5f5f5;
        }

        body.dark-theme .dropdown-item:focus,
        .dropdown-item:hover {
            color: #f5f5f5;
            background-color: #6c757d;
        }
        body.dark-theme .bootstrap-select .no-results{
            background: #40444b;
        }

        .placeholder{
          color:#FFFFFF;
        }
    </style>

    <title>Guild PvP tool</title>
</head>

<body class="dark-theme">
    <div class="container" style="margin-top:100px;">
        <h1 class="text-center">Plague PvP tool</h1>
        <br />

        <div class="row">
            <div class="col-sm-12">
                <div style="display: flex;flex-wrap:wrap;align-items:flex-start">
                    <div style="width:240px;margin-right:15px;" class="mb-2">
                        <select style=" color: #FF0000;"id="your_unit" class="selectpicker" title="Your 100% CR hero" data-live-search="true">

                        </select>
                    </div>
                    <div class="input-group mb-2" style="width:150px">
                        <input id="you_speed_1" name="you_speed_1" type="number" min="0" class="form-control" />
                        <div class="input-group-append">
                            <span class="input-group-text">Speed</span>
                        </div>
                    </div>
                    <div style="flex:1"></div>
                <!--    <div class="btn-group mb-2" role="group" style="height: 38px;">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                            data-toggle="dropdown">Theme</button>
                        <div class="dropdown-menu">
                            <a id="dark_theme_btn" class="dropdown-item" href="#">Dark</a>
                            <a id="light_theme_btn" class="dropdown-item" href="#">Light</a>
                        </div>
                    </div> --->
                </div>
            </div>
        </div>

        <div class="list-group">
            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select id="enemy_unit_1" title="Select a hero" class="selectpicker"
                            data-target="r_enemy_unit_1" data-live-search="true">
                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select id="enemy_arti_1" title="Select an Artifact" data-target="r_enemy_arti_1"
                            class="selectpicker" data-live-search="true">

                        </select>
                    </div>
                    <div class="col-sm-2 col-6" style="margin-bottom:10px">
                        <div class="input-group">
                            <input id="enemy_hp_1" data-target="r_enemy_hp_1" type="text"
                                class="form-control enemy_hp" />
                            <div class="input-group-append">
                                <span class="input-group-text">HP</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-6" style="margin-bottom:10px">
                        <div class="input-group">
                            <input id="enemy_cr_1" type="number" min="0" max="100" class="form-control" />
                            <div class="input-group-append">
                                <span class="input-group-text w72">% CR</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-6">
                        <input id="enemy_info_1" type="text" class="form-control enemy_info"
                            placeholder="Additional info..." />
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="input-group">
                            <span id="enemy_speed_1" class="form-control">—</span>
                            <div class="input-group-append">
                                <span class="input-group-text w72">Speed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select id="enemy_unit_2" title="Select a hero" class="selectpicker"
                            data-target="r_enemy_unit_2" data-live-search="true">
                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select id="enemy_arti_2" title="Select an Artifact" data-target="r_enemy_arti_2"
                            class="selectpicker" data-live-search="true">
                        </select>
                    </div>
                    <div class="col-sm-2 col-6" style="margin-bottom:10px">
                        <div class="input-group">
                            <input id="enemy_hp_2" data-target="r_enemy_hp_2" type="text"
                                class="form-control enemy_hp" />
                            <div class="input-group-append">
                                <span class="input-group-text">HP</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-6" style="margin-bottom:10px">
                        <div class="input-group">
                            <input id="enemy_cr_2" type="number" min="0" max="100" class="form-control" />
                            <div class="input-group-append">
                                <span class="input-group-text w72">% CR</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-6">
                        <input id="enemy_info_2" type="text" class="form-control enemy_info"
                            placeholder="Additional info..." />
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="input-group">
                            <span id="enemy_speed_2" class="form-control">—</span>
                            <div class="input-group-append">
                                <span class="input-group-text w72">Speed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select id="enemy_unit_3" title="Select a hero" class="selectpicker"
                            data-target="r_enemy_unit_3" data-live-search="true">

                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select id="enemy_arti_3" title="Select an Artifact" data-target="r_enemy_arti_3"
                            class="selectpicker" data-live-search="true">
                        </select>
                    </div>
                    <div class="col-sm-2 col-6" style="margin-bottom:10px">
                        <div class="input-group">
                            <input id="enemy_hp_3" data-target="r_enemy_hp_3" type="text"
                                class="form-control enemy_hp" />
                            <div class="input-group-append">
                                <span class="input-group-text">HP</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-6" style="margin-bottom:10px">
                        <div class="input-group">
                            <input id="enemy_cr_3" type="number" min="0" max="100" class="form-control" />
                            <div class="input-group-append">
                                <span class="input-group-text w72">% CR</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-6">
                        <input id="enemy_info_3" type="text" class="form-control enemy_info"
                            placeholder="Additional info..." />
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="input-group">
                            <span id="enemy_speed_3" class="form-control">—</span>
                            <div class="input-group-append">
                                <span class="input-group-text w72">Speed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select id="enemy_unit_4" title="Select a hero" class="selectpicker"
                            data-target="r_enemy_unit_4" data-live-search="true">

                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select id="enemy_arti_4" title="Select an Artifact" data-target="r_enemy_arti_3"
                            class="selectpicker" data-live-search="true">
                        </select>
                    </div>
                    <div class="col-sm-2 col-6" style="margin-bottom:10px">
                        <div class="input-group">
                            <input id="enemy_hp_4" data-target="r_enemy_hp_4" type="text"
                                class="form-control enemy_hp" />
                            <div class="input-group-append">
                                <span class="input-group-text">HP</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-6" style="margin-bottom:10px">
                        <div class="input-group">
                            <input id="enemy_cr_4" type="number" min="0" max="100" class="form-control" />
                            <div class="input-group-append">
                                <span class="input-group-text w72">% CR</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-6">
                        <input id="enemy_info_4" type="text" class="form-control enemy_info"
                            placeholder="Additional info..." />
                    </div>
                    <div class="col-sm-2 col-6">
                        <div class="input-group">
                            <span id="enemy_speed_4" class="form-control">—</span>
                            <div class="input-group-append">
                                <span class="input-group-text w72">Speed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div>
            <div style="display: flex;justify-content: space-between;">
                <h2>Report</h2>
                <div class="tooltipf">
                    <button class="btn btn-outline-secondary" onclick="myFunction()" onmouseout="outFunc()"><span
                            class="tooltiptext" id="myTooltip">Copy to clipboard</span>Copy</button>
                </div>
            </div>
            <textarea id="result_text" class="form-control" style="min-height:120px;"></textarea>
        </div>
        <br>
        <br>
        <br>
    </div>

    <!-- JavaScript -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script>
        var heroList = [];
        var artifactList = [];

        function refresh_result() {
            if ($("#you_speed_1").val() != "") {
                if ($("#enemy_cr_1").val() != "")
                    $("#enemy_speed_1").html(Math.ceil($("#you_speed_1").val() / 100 * $("#enemy_cr_1").val()));
                if ($("#enemy_cr_2").val() != "")
                    $("#enemy_speed_2").html(Math.ceil($("#you_speed_1").val() / 100 * $("#enemy_cr_2").val()));
                if ($("#enemy_cr_3").val() != "")
                    $("#enemy_speed_3").html(Math.ceil($("#you_speed_1").val() / 100 * $("#enemy_cr_3").val()));
                if ($("#enemy_cr_4").val() != "")
                    $("#enemy_speed_4").html(Math.ceil($("#you_speed_1").val() / 100 * $("#enemy_cr_4").val()));
            } else {
                $("#enemy_speed_1").html("—");
                $("#enemy_speed_2").html("—");
                $("#enemy_speed_3").html("—");
                $("#enemy_speed_4").html("—");
            }

            $("#result_text").empty();
            var r = "";
            var separator = " / ";

            var e1 = "**" + $("#enemy_unit_1").val() + "**";
            var hp1 = $("#enemy_hp_1").val() != "" ? separator + $("#enemy_hp_1").val() + "**HP**"  : "";
            var a1 = $("#enemy_arti_1").val() != "" ? separator + "**" + $("#enemy_arti_1").val() + "**" : "";
            var s1 = $("#enemy_speed_1").text() != "—" ? separator + $("#enemy_speed_1").text() + "**Speed**" : "";
            var i1 = $("#enemy_info_1").val() != "" ? separator + $("#enemy_info_1").val() : "";

            var e2 = "**" + $("#enemy_unit_2").val() + "**";
            var hp2 = $("#enemy_hp_2").val() != "" ? separator + $("#enemy_hp_2").val() + "**HP**"  : "";
            var a2 = $("#enemy_arti_2").val() != "" ? separator + "**" + $("#enemy_arti_2").val() + "**" : "";
            var s2 = $("#enemy_speed_2").text() != "—" ? separator + $("#enemy_speed_2").text() + "**Speed**" : "";
            var i2 = $("#enemy_info_2").val() != "" ? separator + $("#enemy_info_2").val() : "";

            var e3 = "**" + $("#enemy_unit_3").val() + "**";
            var hp3 = $("#enemy_hp_3").val() != "" ? separator + $("#enemy_hp_3").val() + "**HP**"  : "";
            var a3 = $("#enemy_arti_3").val() != "" ? separator + "**" + $("#enemy_arti_3").val() + "**" : "";
            var s3 = $("#enemy_speed_3").text() != "—" ? separator + $("#enemy_speed_3").text() + "**Speed**" : "";
            var i3 = $("#enemy_info_3").val() != "" ? separator + $("#enemy_info_3").val() : "";

            var e4 = "**" + $("#enemy_unit_3").val() + "**";
            var hp4 = $("#enemy_hp_3").val() != "" ? separator + $("#enemy_hp_3").val() + "**HP**"  : "";
            var a4 = $("#enemy_arti_3").val() != "" ? separator + "**" + $("#enemy_arti_3").val() + "**" : "";
            var s4 = $("#enemy_speed_3").text() != "—" ? separator + $("#enemy_speed_3").text() + "**Speed**" : "";
            var i4 = $("#enemy_info_3").val() != "" ? separator + $("#enemy_info_3").val() : "";

            if (e1 != "")
                r += e1 + s1 + hp1 + a1 + i1 + "\r\n";
            if (e2 != "")
                r += e2 + s2 + hp2 + a2 + i2 + "\r\n";
            if (e3 != "")
               r += e3 + s3 + hp3 + a3 + i3 + "\r\n";
            if (e4 != "")
               r += e4 + s4 + hp4 + a4 + i4;

            $("#result_text").html(r);
        }

        $(function () {

            $.getJSON( "https://api.epicsevendb.com/hero", function( data ) {

                $.each( data.results, function( key, val ) {
                    if(val.attribute != 'none')
                        heroList.push({imageUrl: "https://assets.epicsevendb.com/hero/"+val._id+"/icon.png", Name: val.name });
                });

                populateHeroesDropdown($("#your_unit"));
                populateHeroesDropdown($("#enemy_unit_1"));
                populateHeroesDropdown($("#enemy_unit_2"));
                populateHeroesDropdown($("#enemy_unit_3"));
                populateHeroesDropdown($("#enemy_unit_4"));

                $('.selectpicker').selectpicker("refresh");
            });

            $.getJSON( "https://api.epicsevendb.com/artifact", function( data ) {

                $.each( data.results, function( key, val ) {
                    artifactList.push({imageUrl: "https://assets.epicsevendb.com/artifact/"+val._id+"/icon.png", Name: val.name });
                });

                populateArtifactsDropdown($("#enemy_arti_1"));
                populateArtifactsDropdown($("#enemy_arti_2"));
                populateArtifactsDropdown($("#enemy_arti_3"));
                populateArtifactsDropdown($("#enemy_arti_4"));

                $('.selectpicker').selectpicker("refresh");
            });

            if (localStorage.getItem("theme") == "light")
                $("body").removeClass("dark-theme");

            $("#dark_theme_btn").on("click", function (e) {
                e.preventDefault();
                localStorage.setItem("theme", "dark");
                $("body").addClass("dark-theme");
            })

            $("#light_theme_btn").on("click", function (e) {
                e.preventDefault();
                localStorage.setItem("theme", "light");
                $("body").removeClass("dark-theme");
            })

            $('.selectpicker').selectpicker();

            $("input[type=number]").on("change", function () {
                refresh_result();
            })

            $('.selectpicker').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
                if ($(this).attr("id") == "your_unit") {
                    $("#you_speed_1").val(localStorage.getItem($("#your_unit").val()));
                }
                refresh_result();
            });

            $(".enemy_hp").on("change", function (e) {

                var v = $(this).val();
                var t = $(this).data("target");
                if (t != undefined && t != "") {
                    var target = $("#" + t);
                    target.html(v != "" ? v + " HP" : "—");
                }
                refresh_result();
            })

            $(".enemy_info").on("change", function (e) {
                refresh_result();
            })

            $("#you_speed_1").on("change", function (e) {
                var your_unit = $("#your_unit").val();
                var your_speed = $("#you_speed_1").val();
                if (your_unit != "")
                    localStorage.setItem(your_unit, your_speed);
                refresh_result();
            })
        })

        function populateHeroesDropdown(dropdown) {
            $.each(heroList, function (number, hero) {
                dropdown.append('<option data-content="<img class=\'hero-icon\' src=\'' + hero.imageUrl + '\' /><span>' + hero.Name + '</span>">' + hero.Name + '</option>');
            })
        }

        function populateArtifactsDropdown(dropdown){
            $.each(artifactList, function (number, artifact) {
                dropdown.append('<option data-content="<img class=\'arti-icon\' src=\'' + artifact.imageUrl + '\' /><span>' + artifact.Name + '</span>">' + artifact.Name + '</option>');
            });
        }

        function myFunction() {
            var copyText = document.getElementById("result_text");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");

            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copied!";
        }

        function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copy to clipboard";
        }
    </script>
</body>

</html>
