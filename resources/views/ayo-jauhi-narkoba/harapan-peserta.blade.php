<style>
    h1 {
        font-family: sans-serif;
    }

    .olcards,
    .olcards * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .olcards {
        list-style: none;
        counter-reset: cardCount;
        font-family: sans-serif;
        display: flex;
        flex-direction: column;
        --cardsGap: 1rem;
        gap: var(--cardsGap);
        padding-bottom: var(--cardsGap);
    }

    .olcards li {
        counter-increment: cardCount;
        display: flex;
        color: white;
        --labelOffset: 1rem;
        --arrowClipSize: 1.5rem;
        margin-top: var(--labelOffset);
    }

    .olcards li::before {
        content: counter(cardCount, decimal-leading-zero);
        background: white;
        color: var(--cardColor);
        font-size: 2em;
        font-weight: 700;
        transform: translateY(calc(-1 * var(--labelOffset)));
        margin-right: calc(-1 * var(--labelOffset));
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-inline: 0.5em;
    }

    .olcards li .content {
        background-color: var(--cardColor);
        --inlinePadding: 1em;
        --boxPadding: 0.5em;
        display: grid;
        padding: var(--boxPadding) calc(var(--inlinePadding) + var(--arrowClipSize)) var(--boxPadding) calc(var(--inlinePadding) + var(--labelOffset));
        grid-template-areas:
            "icon title"
            "icon text";
        gap: 0.25em 1em;
        clip-path: polygon(0 0,
                calc(100% - var(--arrowClipSize)) 0,
                100% 50%,
                calc(100% - var(--arrowClipSize)) 100%,
                calc(100% - var(--arrowClipSize)) calc(100% + var(--cardsGap)),
                0 calc(100% + var(--cardsGap)));
        position: relative;
    }

    .olcards li .content::before {
        content: "";
        position: absolute;
        width: var(--labelOffset);
        height: var(--labelOffset);
        background: var(--cardColor);
        left: 0;
        bottom: 0;
        clip-path: polygon(0 0, 100% 0, 0 100%);
        filter: brightness(0.75);
    }

    .olcards li .content::after {
        content: "";
        position: absolute;
        height: var(--cardsGap);
        width: var(--cardsGap);
        background: linear-gradient(to right, rgba(0, 0, 0, 0.25), transparent 50%);
        left: 0;
        top: 100%;
    }

    .olcards li .icon {
        grid-area: icon;
        align-self: center;
        font-size: 2em;
    }

    .olcards li .content .title {
        grid-area: title;
        font-size: 1.25em;
        /* font-weight: 700; */
    }

    .olcards li .content .text {
        grid-area: text;
    }
</style>

<div>
    <h1 class="text-3xl font-bold">Pembelajaran ini mengharapkan:</h1>
    <ol class="olcards">
        <li style="--cardColor:#fc374e">
            <div class="content">
                {{-- <div class="icon">😀</div> --}}
                <div class="title">Poin 1</div>
                <div class="text">Peserta didik dapat menerapkan langkah-langkah pencegahan narkoba dalam
                    kehidupan sehari-hari (C3 - mengaplikasikan)
                </div>
            </div>
        </li>
        <li style="--cardColor:#36aeb3">
            <div class="content">
                {{-- <div class="icon">😁</div> --}}
                <div class="title">Poin 2</div>
                <div class="text">Peserta didik dapat menganalisis faktor penyebab dan dampak penggunaan
                    narkoba pada individu dan masyarakat (C4 - menganalisis)
                </div>
            </div>
        </li>
        <li style="--cardColor:#162d59">
            <div class="content">
                {{-- <div class="icon">😉</div> --}}
                <div class="title">Poin 3</div>
                <div class="text">Peserta didik dapat menunjukkan sikap menekankan pentingnya kesadaran diri
                    dalam mencegah penggunaan narkoba (A3 - menghargai)
                </div>
            </div>
        </li>
        <li style="--cardColor:#f15f0e">
            <div class="content">
                {{-- <div class="icon">😜</div> --}}
                <div class="title">Poin 4</div>
                <div class="text">Peserta didik dapat membangun langkah-langkah pencegahan narkoba ke dalam
                    sebuah program atau kampanye (A4 - mengorganisasikan)
                </div>
            </div>
        </li>

        {{-- poin 5, poin 6 --}}
        <li style="--cardColor:#6c63ff">
            <div class="content">
                {{-- <div class="icon">😜</div> --}}
                <div class="title">Poin 5</div>
                <div class="text">Peserta didik dapat menunjukkan penyampaian informasi tentang bahaya
                    narkoba (P3 - presisi)
                </div>
            </div>
        </li>

        <li style="--cardColor:#5b9e00">
            <div class="content">
                {{-- <div class="icon">😜</div> --}}
                <div class="title">Poin 6</div>
                <div class="text">Peserta didik dapat membangun mekanisme untuk mengedukasi teman sebaya
                    tentang bahaya narkoba (P4 - artikulasi)
                </div>
            </div>
        </li>
    </ol>
</div>
