<div class="box-container pt-0">
    <div class="tabs">
        <ul>
            <li class="is-active"><a id="{{ $tabOne }}"><span>{{ $tabOne }}</span></a></li>
            <li><a id="{{ $tabTwo }}"><span>{{ $tabTwo }}</span></a></li>
            <li><a id="{{ $tabThree }}"><span>{{ $tabThree }}</span></a></li>
            <li><a id="{{ $tabFour }}"><span>{{ $tabFour }}</span></a></li>
            <li><a>{{ $tabFive }}</a></li>
        </ul>
    </div>
    <div class="tab-content">
      <div class="tab-pane is-active" id="{{ $tabOne }}">Picture content</div>
      <div class="tab-pane" id="{{ $tabTwo }}">Music content</div>
      <div class="tab-pane" id="{{ $tabThree }}">Videos content</div>
      <div class="tab-pane" id="{{ $tabFour }}">Documents content</div>
    </div>
</div>
