<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Trivili | Trip in Bali</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="img/favicon-trivili.png">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="../path/to/flowbite/dist/datepicker.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="http://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
        <script src="http://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
        <script>
            var render=createwidgetlokasi("provinsi","kabupaten","kecamatan","kelurahan");
            $(document).ready(function(){
                $("#cart").click(function(){
                    $("#addList").append($(".item1").text());
                    $("#addList").append("Rp. ");
                    $("#addList").append($(".price1").text());
                    $("#addList").append('<li><a href="#"></a></li>');
                    $(".total").text(Number($(".price1").text()));
                });
                $("#nama").keyup(function(){
                    var a = String($("#nama").val());
                    $("#addNama").val(a);
                });
                $("#email").keyup(function(){
                    var a = String($("#email").val());
                    $("#addEmail").val(a);
                });
                $("#alamat").keyup(function(){
                    var a = String($("#alamat").val());
                    $("#addAlamat").val(a);
                });
                $("#provinsi").keyup(function(){
                    var a = String($("#provinsi").val());
                    $("#addProvinsi").val(a);
                });
                $("#negara").keyup(function(){
                    var a = String($("#negara").val());
                    $("#addNegara").val(a);
                });
                $("#pos").keyup(function(){
                    var a = String($("#pos").val());
                    $("#addPos").val(a);
                });
                $(".hapus").click(function(){
                    $("#addList").each(function(){
                        $(this).text("");
                    });  
                });
            });
        </script>
    </head>
    <body class="bg-slate-100">
        @include('layouts.navigation')
        <main>
            {{ $slot }}
        </main>
    </body>
</html>