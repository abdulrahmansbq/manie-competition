<div>
    <style>

        .center {
        }

        .top3 {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            color: #4B4168;
        }
        .top3 .item {
            box-sizing: border-box;
            position: relative;
            background: white;
            width: 15rem;
            height: 11rem;
            text-align: center;
            padding: 2.8rem 0 0;
            margin: 1rem 1rem 2rem;
            border-radius: 0.5rem;
            transform-origin: bottom;
            cursor: pointer;
            transition: transform 200ms ease-in-out;
            box-shadow: 0 0 4rem 0 rgba(0, 0, 0, 0.1), 0 1rem 2rem -1rem rgba(0, 0, 0, 0.3);
        }
        .top3 .item .pic {
            position: absolute;
            top: -2rem;
            right: 5.5rem;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            margin-left: 1rem;
            box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.2), 0 1rem 1rem -0.5rem rgba(0, 0, 0, 0.3);
        }
        .top3 .item .pos {
            font-weight: 900;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .top3 .item .name {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }
        .top3 .item .score {
            opacity: 0.5;
        }
        .top3 .item .score:after {
            display: block;
            content: "points";
            opacity: 0.5;
        }
        .top3 .item.one {
            width: 15rem;
            height: 13rem;
            padding-top: 3.5rem;
        }
        .top3 .item.one .pic {
            width: 5rem;
            height: 5rem;
            right: 5rem;
        }
        .top3 .item:hover {
            transform: scale(1.05);
        }

        .list {
            padding-right: 2rem;
            margin: 0 auto;
        }
        .list .item {
            position: relative;
            display: flex;
            align-items: center;
            height: 3rem;
            border-radius: 4rem;
            margin-bottom: 2rem;
            background: white;
            transform-origin: right;
            cursor: pointer;
            transition: transform 200ms ease-in-out;
            box-shadow: 0 0 4rem 0 rgba(0, 0, 0, 0.1), 0 1rem 2rem -1rem rgba(0, 0, 0, 0.3);
        }
        .list .item .pos {
            font-weight: 900;
            position: absolute;
            right: -2rem;
            text-align: center;
            font-size: 1.25rem;
            width: 1.5rem;
            color: white;
            opacity: 0.6;
            transition: opacity 200ms ease-in-out;
        }
        .list .item .pic {
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            margin-left: 1rem;
            box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.2), 0 1rem 1rem -0.5rem rgba(0, 0, 0, 0.3);
        }
        .list .item .name {
            flex-grow: 2;
            flex-basis: 10rem;
            font-size: 1.1rem;
        }
        .list .item .score {
            margin-right: 1.5rem;
            opacity: 0.5;
        }
        .list .item .score:after {
            margin-left: 1rem;
            content: "points";
            opacity: 0.5;
        }
        .list .item:hover {
            transform: scale(1.05);
        }
        .list .item:hover .pos {
            opacity: 0.8;
        }
    </style>

    <div class="center text-dark" wire:poll>
        <div class="top3">
            @if($ranks->count() > 1)
            <div class="two item">
                <div class="pos">
                    2
                </div>
                <div class="pic" style="background-image: url('{{ asset('assets/leaderboard/'.$ranks[1]->avatar.'.png') }}')"></div>
                <div class="name">
                    {{ $ranks[1]->name }}
                </div>
                <div class="score">
                    {{ $ranks[1]->points }}
                </div>
            </div>
            @endif
            @if($ranks->count() > 0)
            <div class="one item">
                <div class="pos">
                    1
                </div>
                <div class="pic" style="background-image: url('{{ asset('assets/leaderboard/'.$ranks[0]->avatar.'.png') }}')"></div>
                <div class="name">
                    {{ $ranks[0]->name }}
                </div>
                <div class="score">
                    {{ $ranks[0]->points }}
                </div>
            </div>
                @endif
                @if($ranks->count() > 2)
            <div class="three item">
                <div class="pos">
                    3
                </div>
                <div class="pic" style="background-image: url('{{ asset('assets/leaderboard/'.$ranks[2]->avatar.'.png') }}')"></div>
                <div class="name">
                    {{ $ranks[2]->name }}
                </div>
                <div class="score">
                    {{ $ranks[2]->name }}
                </div>
            </div>
                @endif
        </div>
        <div class="list">
            @foreach($ranks as $rank)
                @continue($loop->iteration <= 3)
                <div class="item">
                    <div class="pos">
                        {{ $loop->iteration }}
                    </div>
                    <div class="pic" style="background-image: url('{{ asset('assets/leaderboard/'.$rank->avatar.'.png') }}')"></div>
                    <div class="name">
                        {{ $rank->name }}
                    </div>
                    <div class="score">
                        {{ $rank->points }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
