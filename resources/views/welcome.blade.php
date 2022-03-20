@extends('templates.base')
@section('content')
<div class="text-drwhite text-xl text-center">Welcome to the Dragons Roost Campaign</div>
<a href="{{route('welcome') . '#session'}}">Go To session</a>
<div class="mt-2">
    In an empire ruled by sorcerers, the everyday Humble keep their heads down and mind their work.
    The Trade don't fare much better, plying their craft to serve their "betters." Among these number, we find our adventurers.
</div>
<div class="mt-2 bg-drdarkblue p-3 rounded-lg">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vestibulum vulputate diam eget varius. Aliquam erat volutpat. Integer pretium diam sodales, blandit ex id, malesuada neque. Proin porta rhoncus ligula quis pulvinar. Donec consectetur dolor ac leo pretium congue. Cras hendrerit mauris sagittis nisl semper aliquam. Nam quis varius velit. Vestibulum ultrices risus ut ex accumsan pulvinar. Nam vulputate gravida vestibulum. Ut aliquet mi at eleifend fermentum.

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer in sollicitudin risus, in rhoncus lectus. Cras in vulputate nunc, aliquet fringilla quam. Nullam molestie mollis condimentum. Fusce ullamcorper facilisis ex ac vehicula. Sed in arcu ultricies, pulvinar lacus vel, venenatis quam. Duis sagittis, erat quis scelerisque laoreet, nisi lectus euismod ante, vitae sagittis dui massa ut neque. Donec et nibh vel mauris faucibus imperdiet id vitae nisl. Integer lobortis nisl at massa convallis, vel molestie ante volutpat. Vestibulum placerat pellentesque mattis. Nullam quis tristique purus, sit amet pulvinar est. Suspendisse eget lorem sapien. Vivamus vel cursus magna.

Vivamus eu velit dapibus, mattis est ac, efficitur augue. Etiam tempus mi a accumsan tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus porta nibh vitae metus viverra consequat. In hac habitasse platea dictumst. Nunc semper ipsum a ipsum tristique fermentum. Duis at suscipit lacus.

Duis finibus ullamcorper est, vel ultricies augue vulputate sit amet. Praesent vitae mi sed sapien accumsan interdum. Ut metus magna, lacinia eget pretium vel, efficitur vitae enim. Curabitur id sapien sed elit suscipit consectetur. Integer iaculis nisl quis semper tincidunt. Nulla ultricies mollis tincidunt. Donec fringilla, nulla sed dapibus tristique, ex ante tempus diam, quis eleifend leo nunc et metus. Mauris sagittis ligula nec lectus scelerisque, id rhoncus metus ultrices. Pellentesque id accumsan sapien. Curabitur vestibulum ex vel lacus porta accumsan. Donec mattis dolor convallis aliquet rutrum. Nam egestas, eros id congue sagittis, odio enim finibus tortor, id rhoncus sem mauris quis leo. Aenean pretium turpis nec lacus feugiat, non pharetra sapien pulvinar. Etiam tristique elit at enim egestas, nec volutpat ante iaculis.

Vivamus eu aliquam libero. Nullam vel hendrerit mi. In cursus neque ac dolor pulvinar, ac dapibus ipsum mollis. Vivamus massa diam, feugiat vel augue in, finibus molestie ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam quis pretium lorem. Nunc sagittis sapien eget sapien auctor, eget pharetra leo maximus. Nullam lacinia tellus eros, vel vehicula orci pellentesque ut. Nam ultrices at libero a dictum. Nam vestibulum, urna sed aliquet pellentesque, nisl ligula pellentesque diam, a ullamcorper lectus lectus ut eros. Mauris volutpat feugiat accumsan.
</div>
<a href="#session">
    <div class="mt-2 bg-drdarkblue p-3 rounded-lg">
        <div>
            In our first session, the adventurers speak with Pike, an odd bard that keeps his ear to the ground for jobs requiring a peculiar set of skills.
            Getting a finder's fee from the party, he leads them to and introduces them to non other than Otto Merrick, the head of the Merrick familia.
        </div>
        <div class="mt-2">
            Otto has a problem, and her name is Frigga. Frigga needs to make her way to Drake's Hollow, a city on the river to the southeast.
            Unfortunately, the Merricks have enemies, and travel needs to either be with overwhelming force (which Otto is reluctant to spend on his daughter, Frigga),
            or as clandestine as possible.
        </div>
        <div class="mt-2">
            Choosing the clandestine route, our intrepid heroes strike off with Frigga towards Drake's Hollow. Unfortunately, it wasn't quite clandestine enough.
            Were they betrayed by someone in the Merrick organization? Were they spotted leaving the city? Or perhaps someone in the party has an ulterior motive?
            Regardless, the brigands were quickly dispatched and disposed of, but not before the party discovered a token of the Grigori in the brigand leader's pocket.
        </div>
        <div class="mt-2">
            <em>In Blood, Power</em>, is written in harsh draconic on the back of the coin. The front of the coin bears the likeness of Gregor Grigori, the head
            of the Familia Grigori. It seems the rivals of the Merrick's have taken yet another stab at them.
        </div>
        <div class="mt-2">
            Stopped at a waystation on the road, the party stands watch over Frigga's room while she sleeps. Unfortunately, in the night, someone had snuck into her room
            and taken her coinpurse. Frigga isn't impressed with the security provided by her escort, but remains unfazed in the face of apparent danger.
        </div>
        <div class="mt-2">
            Arriving in Drake's hollow, the party is paid, and hosted for dinner. Suspecting Gunther, Frigga's kind uncle, the party investigates, and finds that Gunther
            did have a trick up his sleeves: an unknown hoodlum that tested the party's security by stealing Frigga's coinpurse. While not enthused by the lax security,
            he did have good things to say about how quickly the party defended Frigga from the brigands on the road.
        </div>
    </div>
</a>
@endsection