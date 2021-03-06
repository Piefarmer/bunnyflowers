<div class="server-stats">
    <h1>{{{ucwords($title)}}}</h1>
    <h2>{{{$data->Players}}}/{{{$data->MaxPlayers}}}</h2>

    <?php
    if($data->Players > 0){
            $scale = $data->Players / $data->MaxPlayers;
        }else{
            $scale = 0;
        }


    ?>
    <svg height="40" width="200">
      <g fill="none">
        <path stroke="#111" stroke-width="20" stroke-linecap="round" d="M10 20 l180 0" />
        <path stroke="rgb(<?php echo round(119 - ((119 - 172) * $scale));?>, <?php echo round(216 - (216 * $scale));?>, 0)" stroke-width="15" stroke-linecap="round" d="M10 20 l<?php echo 180 * $scale ?> 0" />
      </g>
      Sorry, your browser does not support inline SVG.
    </svg>
    <h3>Game mode: {{{$data->GameType}}}</h3>
    <h3>IP: {{{$data->IP}}}:{{{$data->Port}}}</h3>
    <a href="/{{{$title}}}">More Info!</a>
</div>
