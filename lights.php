<style>
    /* xmas fairy lights */

    .lights {
        position: absolute;
        top: -1.25em;
        z-index: 1;
        width: 100%;
        margin: -15px 0 0 0;
        padding: 0;
        text-align: center;
        white-space: nowrap;
        overflow: hidden
    }

    .lights.lights2 li:nth-child(n) {
        box-shadow: none
    }

    .lights li {
        display: inline-block;
        position: relative;
        width: 12px;
        height: 28px;
        margin: 20px;
        background: #ff0;
        box-shadow: 0 5px 24px 3px #df0;
        border-radius: 50%;
        -webkit-animation: flash 2s both infinite;
        animation: flash 2s both infinite
    }

    .lights li:nth-child(2n+1) {
        background: cyan;
        box-shadow: 0 5px 24px 3px cyan;
        -webkit-animation: flash 0.4s both infinite;
        animation: flash 0.4s both infinite
    }

    .lights li:nth-child(4n+2) {
        background: #f70094;
        box-shadow: 0 5px 24px 3px #f70094;
        -webkit-animation: flash 1.1s both infinite;
        animation: flash 1.1s both infinite
    }

    .lights li:nth-child(odd) {
        -webkit-animation-duration: 1.8s;
        animation-duration: 1.8s
    }

    .lights li:nth-child(3n+1) {
        -webkit-animation-duration: 1.4s;
        animation-duration: 1.4s
    }

    .lights li:first-child {
        margin-left: -10px
    }

    @-webkit-keyframes flash {
        0%,
        100% {
            opacity: 1
        }
        50% {
            opacity: 0.2
        }
    }

    @keyframes flash {
        0%,
        100% {
            opacity: 1
        }
        50% {
            opacity: 0.2
        }
    }

</style>
<ul class="lights">
    <!-- xmas fairy lights -->
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<ul class="lights lights2">
    <!-- xmas fairy lights -->
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
