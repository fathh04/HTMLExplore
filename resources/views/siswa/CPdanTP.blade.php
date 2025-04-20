@extends('layout.master')
@section('title', 'CP dan TP')
@section('menuCPdanTP', 'active')

@section('content')
<!-- CP & TP Accordion -->
<div class="container mt-4">
    <h3 class="mb-3"><b>Capaian dan Tujuan Pembelajaran</b></h3>
    <div class="accordion" id="cpTpAccordion">
        <!-- CP -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingCp">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCp" aria-expanded="true" aria-controls="collapseCp">
                    Capaian Pembelajaran (CP)
                </button>
            </h2>
            <div id="collapseCp" class="accordion-collapse collapse show" aria-labelledby="headingCp" data-bs-parent="#cpTpAccordion">
                <div class="accordion-body">
                    <p>
                        Pada akhir fase F peserta didik mampu memahami konsep
                        dan menerapkan perintah HTML, CSS, pemrograman
                        Javascript, bahasa pemrograman server-side serta
                        implementasi framework pada pembuatan web statis dan
                        dinamis untuk beragam kebutuhan yang kontekstual. Selain
                        itu, peserta didik juga mampu mendokumentasikan serta
                        mempresentasikan web statis dan dinamis yang telah
                        dikembangkan.

                    </p>
                </div>
            </div>
        </div>

        <!-- TP -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTp">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTp" aria-expanded="false" aria-controls="collapseTp">
                    Tujuan Pembelajaran (TP)
                </button>
            </h2>
            <div id="collapseTp" class="accordion-collapse collapse" aria-labelledby="headingTp" data-bs-parent="#cpTpAccordion">
                <div class="accordion-body">
                    <ul>
                        Menjelaskan penerapan konsep HTML (Hypertext MarkupLanguage)
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
