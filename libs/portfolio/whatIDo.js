const ItemBox = (props) => {
    const { icon, title, desc } = props;
    return (
        <div className="w-auto h-auto mx-5 my-4 box rounded-xl 2xl:mx-4 3xl:mx-5 xl:my-5 2xl:my-1 2xl:py-4 3xl:py-5 group/item">
            <div className="mt-[1.8rem] mx-[1.8rem] xl:hover:mt-[1.4rem] 2xl:mt-[2rem] 2xl:mx-[2rem] 2xl:hover:mt-[1.5rem] 3xl:mt-[3rem] 3xl:mx-[2.8rem] 3xl:hover:mt-[2rem] transition-all duration-500 ease-in-out">
                <div className="w-10 h-10"><i className={`${icon} fa-2xl text-gray-400 group-focus/item: group-hover/item:text-primary font-bold transition-all duration-500 ease-in-out`}></i></div>
                <h2 className="text-lg font-semibold tracking-wide text-gray-300 2xl:text-xl group-focus/item: group-hover/item:text-white 3xl:py-5 2xl:py-4 font-poppins text-start">{title}</h2>
                <p className="py-2 text-base font-normal tracking-wide text-gray-400 group-focus/item: group-hover/item:text-gray-300 xl:py-3 2xl:py-4 font-poppins text-start">{desc}</p>
                <div className="invisible group-focus/item: group-hover/item:visible text-start">
                    <i className="transition-all duration-500 ease-in-out fa-solid fa-arrow-right-long text-primarySub text-start fa-xl"></i>
                </div>
            </div>
        </div>
    );
}

const WhatIDo = () => {
    return (
        <div className="mt-[35.5rem] md:mt-[30.5rem] ml:mt-[25.5rem] 2ml:mt-[26.5rem] 3ml:mt-[24.5rem] lg:mt-[10.5rem] 2lg:mt-[6.5rem] xl:mt-[8.5rem] 2xl:mt-[4.5rem] 3xl:mt-[5rem] 4xl:mt-0 flex flex-col items-center justify-center lg:px-[3.5rem] xl:px-[3rem] 2xl:px-[6.5rem] 3xl:px-40">
            <div className="justify-center py-10 mx-auto text-center" id="features">
                <TitleAndSlug title='What I Do' slug={'FEATURES'}/>
            </div>
            <div className="grid justify-start h-auto grid-cols-1 gap-0 py-10 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-3 lg:gap-2 xl:gap-3">
                <ItemBox title="UX & UI" desc="Designing interfaces that are intuitive, efficient and enjoyable to use." icon="fa-solid fa-wand-magic-sparkles" />
                <ItemBox title="Web Application" desc="I’ll handle everything from to web app development process until it is time to make your project live." icon="fa-solid fa-book-open" />
                <ItemBox title="Development" desc="Bringing your vision to life with the latest technology and design trends." icon="fa-brands fa-dropbox" />
            </div>
        </div>);
}


const container = document.getElementById('whatIDo');
const root = ReactDOM.createRoot(container);
root.render(<WhatIDo />)