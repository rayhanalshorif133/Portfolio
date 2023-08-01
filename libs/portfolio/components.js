const TitleAndSlug = ({title,slug}) => {
    return (
        <div class="justify-center py-0 mx-auto text-center">
            <h4
                class="justify-center py-1 text-sm font-medium tracking-wide text-center text-primarySub font-montserrat">{slug}</h4>
            <h2
                class="text-[#c4cfde] text-4xl 2xl:text-5xl 3xl:text-6xl font-bold font-montserrat tracking-wide py-5 justify-center text-center">
                {title}</h2>
        </div>
    );
}