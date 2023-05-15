@php
    $aboutCaption = getContent('about.content',true);
    $aboutElement = getContent('about.element');
@endphp


<section class="ptb-150">
    <div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card bg-warning text-white">
                <div class="card-body text-center">
                    <h4>{{ @$aboutCaption->data_values->heading }}</h4>
                    <h6>{{ @$aboutCaption->data_values->sub_heading }}</h6>
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    @php 
                        echo @$aboutCaption->data_values->description 
                    @endphp
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h5>Our Partners</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($aboutElement as $item)
                            <div class="col-4">
                                <img class="img-fluid rounded" style="width: 100%;" src="{{asset('assets/images/frontend/about/'. @$item->data_values->image)}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h5>New Collaboration with...</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-8">
                            <img class="img-fluid rounded" style="width: 100%;" src="{{asset('assets/images/frontend/about/'. @$aboutCaption->data_values->new_collab)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
