@extends("Layout.frontend")

<nav class="navbar navbar-light navbar-expand-md py-2 shadow-sm ">
    <div class="container"><img src="img.Navbar logo.png" width="51" height="51"><a class="navbar-brand d-flex align-items-center" href="#"><span style="font-family: 'Noto Sans Sinhala', sans-serif;font-weight: bold;">&nbsp;<span style="color:#0071bc; font-weight: bolder; font-size: 30px;">සණස</span> ගොඩිගමුව ශාඛාව</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto font-weight-bold">
                <li class="nav-item"><a class="nav-link " href="/">මුල් පිටුව</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('history') }}">ඉතිහාසය</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Account') }}">ගිණුම්</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Projects') }}">ප්‍රජා සේවාවන්&nbsp;</a></li>
            <!-- </ul><a class="btn btn-primary ms-md-2" role="button" href="#" style="background: linear-gradient(#0072bc, #013b60), var(--bs-blue);border-color: var(--bs-border-color-translucent);font-size: 20px;border-radius: 12px;border-top-left-radius: 57;">පිවිසීම</a> -->
        </div>
    </div>
</nav>


<div class="container d-flex flex-column align-items-center py-4 py-xl-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto" style="width: 100%;">
            <h2 style="font-weight: bold">සාදරයෙන් පිලිගනිමු</h2>
            <p class="w-lg-50"></p>
        </div>
    </div>
    <div class="row gy-4 w-100" style="max-width: 800px;margin: -70px -12px 0px;">
        <div class="col-12">
            <div class="card"><img class="card-img w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4"></div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card"><img class="card-img w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                    <h4 style="transform: translateY(78px);">Title</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card"><img class="card-img w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                    <h4 style="transform: translateY(78px);">Title</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card"></div>
</div>
<div class="card" style="transform: translateY(0px);filter: blur(0px);background: var(--bs-card-cap-bg);border-top-style: none;">
    <div class="card-body" style="transform: translateY(5px);padding: 37px;font-family: 'Noto Sans Sinhala', sans-serif;filter: blur(0px);">

       <div class="row">
        <div class="col-md-6">


        <h4 class="card-title" style="font-family: 'Noto Sans Sinhala', sans-serif;font-weight: bold;line-height: 20.8px;padding: 4px;transform: translateY(-20px);">බැංකුව විවෘතව පවතින වේලාවන්</h4>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>සඳුදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>අගහරුවාදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>බදාදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>&nbsp; පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>බ්‍රහස්පතින්දා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>සිකුරාදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>සෙනසුරාදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>ඉරිදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                </tbody>
            </table>
        </div> </div>
        <div class="col-md-6">
        <div class="container">
    <div class="row " >
        <div class="col-md-12 col-sm-12 my-2 containerforhead" style="transform: translateY(29px);">
            <h1 style="font-family: 'Noto Sans Sinhala', sans-serif;font-size: 20px;font-weight: bold;">දර්ශනය</h1>
            <p style="font-family: 'Noto Sans Sinhala', sans-serif;">"සමූපාකාර ප්‍රතිපත්ති හා සාරධර්ම මත පදනම් වූ නව සමාජයක්"</p>
        </div>
        <div class="col-md-12 col-sm-12 my-2 containerforhead" style="transform: translateY(29px);">
            <h1 style="font-family: 'Noto Sans Sinhala', sans-serif;font-size: 20px;font-weight: bold;">මෙහෙවර</h1>
            <p style="font-family: 'Noto Sans Sinhala', sans-serif;">"සණස දර්ශනයෙන් අපේක්ෂිත නව සමාජයක් ස්ථාපනය කිරීම සඳහා මූල්‍යමය වශයෙන් මෙන්ම පරිසර හිතකාමී ලෙස ප්‍රජාව ශක්තිමත් කිරීම හා සංවර්ධනය කිරීම"</p>
        </div>
    </div>
</div>



        </div>
    </div>
</div>

<section class="position-relative py-4 py-xl-5" style="transform: translateY(29px);">
    <div class="container position-relative">
        <div class="row">
            <div class="col"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="100%"></iframe></div>
            <div class="col-md-6 col-xl-4">
                <div>
                    <form class="p-3 p-xl-4" method="post" style="font-family: 'Noto Sans Sinhala', sans-serif;">
                        <div class="mb-3"><label class="form-label" for="name"><span><b>ලිපිනය</b></span>&nbsp; &nbsp;: අංක 68, පිළියන්දල පාර,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; ගොඩිගමුව,මහරගම&nbsp;</label></div>
                        <div class="mb-3"><label class="form-label" for="email"><span><b>දුරකථන</b></span>&nbsp; : 0112 850 853</label></div>
                        <div class="mb-3"><label class="form-label" for="message"><span><b>ෆැක්ස්</b></span>&nbsp; &nbsp; : 0112 850 853</label><label class="form-label" for="message"><span><b>ඊමේල්</b></span>&nbsp; &nbsp; : godigamuwasanasa@yahoo</label><label class="form-label" for="message"><span><b>FB</b></span>&nbsp; &nbsp; &nbsp; &nbsp; : godigamuwa</label></div>
                        <div class="mb-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@extends('Components.footer')
