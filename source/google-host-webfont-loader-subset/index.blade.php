@extends('_layouts.test-template')

@section('head')
<title>Font Speed Experiment - Shane Jones - Under2</title>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
    h1, h2 {
        font-weight: 900;
    }

</style>

@endsection

@section('content')

<main class="main p-4">
    <h1 class="text-4xl text-black">Font Speed Experiment - Roboto</h1>
    <p class="mb-4">Sit sit minim id duis nisi <strong>non ex eiusmod occaecat anim voluptate sunt</strong>. Id sunt laborum irure ullamco aliqua tempor adipisicing voluptate pariatur excepteur nostrud dolor. Cillum cupidatat et Lorem non. Eiusmod exercitation irure qui eiusmod deserunt. Commodo mollit dolor dolore dolore consectetur nulla labore esse.</p>
    <p class="mb-4">Lorem occaecat laboris aute aliqua Lorem consectetur reprehenderit officia et. Ex non id enim velit nulla. <strong>In tempor fugiat elit fugiat labore adipisicing</strong> cillum incididunt minim cillum. Ex dolor incididunt consequat officia proident fugiat ex ex magna consequat laborum tempor. Cillum est Lorem adipisicing nulla anim dolor est deserunt fugiat reprehenderit ullamco eiusmod esse aliquip.</p>
    <h2 class="text-3xl text-black">Anim pariatur commodo commodo Lorem duis amet amet sunt excepteur laboris sit veniam dolor sunt.</h2>

    <p class="mb-4">Labore commodo magna tempor adipisicing ut Lorem officia. <strong>Proident nisi ipsum laborum ullamco</strong>. Et qui velit qui quis non id ullamco pariatur qui culpa Lorem elit. Cupidatat sint ea aute voluptate pariatur culpa ullamco occaecat occaecat eu ea. Non irure ullamco minim dolore magna laborum. Ex pariatur dolor aliquip proident ea anim aliqua. Nulla labore elit cillum aliquip commodo.</p>

    <p class="mb-4">Officia laborum anim anim esse do ipsum magna ad aliquip sunt adipisicing veniam. Voluptate qui ipsum eiusmod ullamco est nisi commodo et aute officia dolor. Officia labore nisi Lorem nostrud anim non. Ex qui laboris nulla aute do deserunt qui in ea eiusmod aute et. Ut dolore aute consectetur eiusmod sint Lorem. Magna qui cupidatat labore elit ut elit eiusmod nostrud velit.</p>

    <p class="mb-4">Minim consequat elit adipisicing consectetur dolore aute sint proident velit eiusmod. Incididunt minim esse anim incididunt in consectetur fugiat. Laborum ullamco minim tempor tempor dolor voluptate non. Ut velit proident laborum nulla dolor ad. Aliquip ipsum aliqua culpa non amet consectetur amet. Velit ad laborum veniam velit elit.</p>

    <p class="mb-4">Occaecat deserunt cillum esse quis commodo dolor adipisicing id velit. Tempor incididunt dolore ea nostrud adipisicing ipsum et aliqua consequat fugiat. Do exercitation amet pariatur ipsum id adipisicing nostrud voluptate excepteur sunt.</p>
</main>

@endsection

@section('script')
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Roboto:400,700,900:latin' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
@endsection