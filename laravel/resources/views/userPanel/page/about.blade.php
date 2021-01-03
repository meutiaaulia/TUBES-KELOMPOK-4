@extends('userPanel.template.app',[
'title'=>'About Us'
])
@section('content')
<div class="container h-100">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 text-center">
            <img src="{{asset('img/illustration/illustration_father kids_svg.svg')}}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <p class="h2 font-weight-bold d-inline">About Us</p>
            <p class="p text-justify">Direktur Jenderal Pendidikan Anak Usia Dini dan Pendidikan Masyarakat, Harris Iskandar, memaparkan bahwa pendidikan literasi finansial di Indonesia masih menjadi sesuatu yang sangat jarang dilakukan. Edukasi literasi finansial pada anak bukan sekadar pengenalan uang, namun sebuah konsep tentang pengenalan pengelolaan keuangan secara bijak dan mampu mengontrol pengeluaran keuangan dengan membedakan mana yang menjadi kebutuhan dan mana yang hanya keinginan, sehingga kelak dapat memiliki perencanaan keuangan yang baik.</p>
                <p class="p text-justify"> Hal ini yang mendasari penerapan teknologi sebagai sarana edukasi bagi literasi finansial anak yang dikemas dalam website KIDDY BANK dengan harapan dapat membantu anak maupun orang tua terkait pendidikan literasi finansial sejak dini.KIDDY BANK sendiri dibentuk pada tanggal 24 September 2020.
            </p>
            <h3><center>TEAM</h3>
        <li>Shafa Tathya Larasati : Project Manager</li>
        <li>Devi Silviani : System Analyst</li>
        <li>Irene Callista Harefa : Database Administrator</li>
        <li>Meutia Aulia Fitri : UI/UX Designer</li>
        <li>Rifki Muhamad Aditama : Front-end Developer
        </div>
    </div>
</div>
@endsection