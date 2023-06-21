@extends('front.layouts.layout')
@section('section')
  <div class="container">
    <div class="row mt-3">
      <div class=" col-5">
        <!-- HTML Version -->
        <div class="d-flex align-items-center">
          <div class="flex-grow-1">
            <h2>Kursni haqida</h2>
            <p class="text-muted mb-0">  Mazkur muqobil malaka oshirush kursi 80 soatga mo`ljallangan bo`lib, bunda qo`shimcha pedagogik ma’lumotga zarurati bo`lgan ishlab chiqarish ta’limi ustalarini ta’lim muassasasida (ish faoliyati jarayonida) kasbiy-pedagogik malakasini oshirib borishga qaratilgan.
            
            </p>
          </div>
          
        </div>
        <!-- END HTML Version -->
      </div>
      <div class="col-2">
        <div class="d-flex justify-content-center align-items-center">
          <img width="150px" src="{{asset('admin/img/avatar.png')}}" alt="">
        </div>
      </div>
      <div class=" col-5">
        <!-- HTML Version -->
        <div class="d-flex align-items-center">
          <div class="flex-grow-1">
            <h2>Kurs dasturi</h2>
            <p class="text-muted mb-0">Kursning dasturi ishlab chiqarish ta’limi ustasining kasb standarti, malaka talabi va lavozim vazifalaridan kelib chiqib, kasbiy-pedagogik faoliyatida zaruriy bilim va ko’nikmalar shakllantirilgan va dastur mazminiga sindirilgan. Kurs dasturi… (link-pdf)
      
            </p>
          </div>
          
        </div>
        <!-- END HTML Version -->
      </div>
    </div>
    <div class="row mt-3">
      <div class=" col-9">
        <!-- HTML Version -->
        <div class="d-flex align-items-center">
          <div class="flex-grow-1">
            <h2>Kursni tashkil qilish</h2>
            <p class="text-muted mb-0">Mazkur kurs professional ta’lim muassasasining boshqaruv (Direktor, o’quv ishlari va ishlab chiqarish ta’limi bo’yicha direktor o’rinbosarlari, bo’lim boshlig`i, uslubchi, katta usta, psixolog) va pedagog (kafedra mudiri, tajribali maxsus fan o`qituvchilari) kadrlari tomonidan seminar-trening shaklida haftasiga bir marotaba o`tkazish rejasiga ko`ra tashkil etiladi
            </p>
          </div>
          
        </div>
        <!-- END HTML Version -->
      </div>
      <div class=" col-3">
        <div class="d-flex justify-content-center align-items-center">
          <img width="150px" src="{{asset('admin/img/avatar.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
@endsection