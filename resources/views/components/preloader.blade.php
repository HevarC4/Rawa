<!-- resources/views/components/preload.blade.php -->
<div x-data="{ loading: true }" x-init="
    window.addEventListener('load', () => {
        loading = false; // Hide preload after page load
    })
" x-show="loading" class="fixed inset-0 flex items-center justify-center bg-gray-900 z-50">
    <div class="thecube">
        <div class="cube c1"></div>
        <div class="cube c2"></div>
        <div class="cube c4"></div>
        <div class="cube c3"></div>
    </div>
</div>

<style>
    .thecube {
        width: 75px;
        height: 75px;
        margin: 0 auto;
        margin-top: 50px;
        position: relative;
        transform: rotateZ(45deg);
    }

    .cube {
        position: relative;
        transform: rotateZ(45deg);
        float: left;
        width: 50%;
        height: 50%;
        transform: scale(1.1);
    }

    .cube:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #26d4ff;
        animation: foldthecube 2.4s infinite linear both;
        transform-origin: 100% 100%;
        box-shadow: 0px 0px 15px 5px rgba(46, 156, 211, 0.8);
    }

    .c2 { transform: scale(1.1) rotateZ(90deg); }
    .c3 { transform: scale(1.1) rotateZ(180deg); }
    .c4 { transform: scale(1.1) rotateZ(270deg); }

    .c2:before { animation-delay: 0.3s; }
    .c3:before { animation-delay: 0.6s; }
    .c4:before { animation-delay: 0.9s; }

    @keyframes foldthecube {
        0%, 10% { transform: perspective(140px) rotateX(-180deg); opacity: 0; }
        25%, 75% { transform: perspective(140px) rotateX(0deg); opacity: 1; }
        90%, 100% { transform: perspective(140px) rotateY(180deg); opacity: 0; }
    }
</style>
