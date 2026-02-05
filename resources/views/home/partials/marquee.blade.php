<!-- Marquee Section -->
<div class="relative py-8 bg-foreground dark:bg-ultra-black overflow-hidden border-y border-foreground/5 dark:border-white/5 shadow-inner">
    <div class="flex whitespace-nowrap animate-marquee">
        @for ($i = 0; $i < 4; $i++)
            <div class="flex items-center gap-12 px-6">
            <span class="text-4xl md:text-6xl font-heading font-black text-bk-orange">BALIKKUCING STUDIO</span>
            <span class="w-4 h-4 md:w-6 md:h-6 rounded-full bg-foreground/20 dark:bg-white/20"></span>
            <span class="text-4xl md:text-6xl font-heading font-black text-foreground/30 dark:text-white/30">RASA JERUK</span>
            <span class="w-4 h-4 md:w-6 md:h-6 rounded-full bg-bk-orange"></span>
            <span class="text-4xl md:text-6xl font-heading font-black text-foreground dark:text-white">EST. 2024</span>
            <span class="w-4 h-4 md:w-6 md:h-6 rounded-full bg-foreground/20 dark:bg-white/20"></span>
    </div>
    @endfor
</div>
</div>