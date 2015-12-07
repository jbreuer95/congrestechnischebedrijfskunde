

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            @if(count($sessies) != 0)
                @foreach($sessies as $sessie)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading{{$sessie->id}}">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse{{$sessie->id}}" aria-expanded="false"
                                   aria-controls="collapse{{$sessie->id}}">
                                    {{$sessie->title}} {{count($sessie->inschrijvingen)}}/{{$sessie->max_inschrijvingen}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{$sessie->id}}" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="heading{{$sessie->id}}">
                            <div class="panel-body">
                                {!! $sessie->body !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                Er zijn op dit moment geen sessies
            @endif
        </div>