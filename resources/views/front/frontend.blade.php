    @extends('front.layouts.layout')
    @section('section')

        <section class="banner mx-0 px-0 row" id="banner" >
        <div class="col-2" id="asosiydiv">
            <div class="">
                <div class="border border-primary border-bottom-2 mt-3 py-2">
                    <a href="" class="text-decoration-none text-dark">+Тақвим мавзулар режаси</a>
                </div>
            </div>
            <div>
                <div class="border border-primary border-bottom-2 mt-1 py-2">
                    <a href="#" id="fantalim" class="text-decoration-none text-dark">+ Фаннинг таълим технологияси</a>
                </div>
                <ul type="none" id="bob" class="m-0 ps-2">
                    @foreach ($data as $item)
                        <li>
                            <div id="bob{{$item->id}}" class="border border-black border-bottom-2 mt-1 py-2">
                                <p style="margin: 0px;" class="text-decoration-none ">{{$item->name}}</p>
                            </div>
                            <ul type="none" class="darslar ps-2" id="darslar{{$item->id}}">
                                @foreach ($item->lessons as $lesson)
                                <li><div  id="dars{{$lesson->id}}" class="border border-danger border-bottom-2 mt-1 py-2"><p style="margin: 0px;" class="ps-2 text-decoration-none">{{$lesson->name}}</p></div>
                                    <ul type="none" class="oqitishtex ps-1" id="oqitishtex{{$lesson->id}}">
                                        <li><div id="oqitish{{$lesson->id}}" class="border border-info border-bottom-2 mt-1 py-1"><a style="margin: 0px;" id="texnologiya" class="ps-3 text-dark text-decoration-none">+ Ўқитиш технологияси</a></div>
                                            <ul type="none" class="xaritalar ps-1"  id="xaritalar{{$lesson->id}}">
                                                <li ><div id="xarita{{$lesson->id}}" class="border border-secondary border-bottom-2 mt-1 py-1"><a id="xaritasi" style="margin: 0px;" class="ps-3 text-dark text-decoration-none">+ Ўқув машғулотининг технологик харитаси</a></div>
                                                    <ul type="none" id="file{{$lesson->id}}" class="pdflar ps-1">
                                                        @foreach ($lesson->pdfs as $pdf)
                                                            {{-- @if(count($pdf)) --}}
                                                                <li id="pdf{{$pdf->id}}" class="ps-3 border-bottom border-bottom-primary border-bottom-2">
                                                                    <a  href="#">{{$pdf->title}}</a></td>
                                                                </li>
                                                            {{-- @endif   --}}
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>   
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <div class="border border-primary border-bottom-2 mt-1 py-2" id="mavzu">
                    <a href="#" class="text-decoration-none text-dark">+Мавзулар тўплами</a>
                </div>
            </div> 
            <div>
                <div class="border border-primary border-bottom-2 mt-1 py-2">
                    <a href="#" class="text-decoration-none text-dark">+Баҳолаш воситалари</a>
                </div>
            </div> 
            <div>
                <div class="border border-primary border-bottom-2 mt-1 py-2">
                    <a href="#" class="text-decoration-none text-dark">+Визуал – дидактик ресурслар</a>
                </div>
            </div>   
        </div>
        <div class="col-10" id="asosiydiv2">
            <iframe id="file" width="100%" height="800" src="files/1686480557_resume.pdf" frameborder="1"></iframe>   
        </div>
        </section>
    @endsection
    <script src="{{asset('front/js/script.js')}}"></script>
