<?php ?>
<!-- https://stackoverflow.com/questions/54270182/wavy-border-css-for-a-circle -->

<style>
.zigzag {
   width:256px;
   height:256px;
   background:
    radial-gradient(silver 60%,transparent 61%),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(16.36deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(32.73deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(49.09deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(65.45deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(81.81deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(98.18deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(114.54deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(130.90deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(147.27deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>"),
    url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-97 -3 256 262' width='256' stroke-dasharray='45, 35' stroke='black' stroke-width='3' fill='silver' style='transform:rotate(164.2deg);'><polygon points='48,16 32,0 16,16' /><polygon points='48,240 16,240 32,256' stroke-dashoffset='-32' /></svg>");
    background-size:100% 100%;
    
    display:inline-block;
}
body {
 background:white;
}
</style>


<div class="zigzag">
</div>

