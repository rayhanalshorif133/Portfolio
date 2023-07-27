const ItemBox = (props) => {
    const { icon, title, desc } = props;
    return (
        <div className="box h-auto w-auto rounded-xl mx-10 2xl:mx-4 3xl:mx-5 my-4 xl:my-5 2xl:my-1 2xl:py-4 3xl:py-5 group/item">
            <div className="mt-[1.8rem] mx-[1.8rem] xl:hover:mt-[1.4rem] 2xl:mt-[2rem] 2xl:mx-[2rem] 2xl:hover:mt-[1.5rem] 3xl:mt-[3rem] 3xl:mx-[2.8rem] 3xl:hover:mt-[2rem] transition-all duration-500 ease-in-out">
                <div className="h-10 w-10"><i className={`${icon} fa-2xl text-gray-400 group-hover/item:text-primary font-bold`}></i></div>
                <h2 className="text-lg 2xl:text-xl font-semibold text-gray-300 group-hover/item:text-white 3xl:py-5 2xl:py-4 font-poppins tracking-wide text-start">{title}</h2>
                <p className="text-base font-normal text-gray-400 group-hover/item:text-gray-300 py-2 xl:py-3 2xl:py-4 font-poppins tracking-wide text-start">{desc}</p>
                <div className="invisible group-hover/item:visible text-start">
                    <i className="fa-solid fa-arrow-right-long text-primarySub  transition-all duration-500 ease-in-out text-start fa-xl"></i>
                </div>
            </div>
        </div>
    );
}

const WhatIDo = () => {
    return (
        <div className="flex flex-col items-center justify-center lg:px-[3.5rem] xl:px-[3.5rem] 2xl:px-[6.5rem] 3xl:px-40">
            <div className="py-10 mx-auto justify-center text-center" id="features">
                <h4 className="text-primarySub font-montserrat text-sm tracking-wide font-medium py-1 justify-center text-center">FEATURES</h4>
                <h2 className="text-[#c4cfde] text-4xl 2xl:text-5xl 3xl:text-6xl font-bold font-montserrat tracking-wide py-5 justify-center text-center">What I Do</h2>
            </div>
            <div className="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-3 gap-0 lg:gap-2 xl:gap-4 h-auto justify-start py-10">
                <ItemBox title="UX Consulting" desc="A UX consultant is responsible for many of the same tasks as a UX designer, but they typically." icon="fa-solid fa-bars" />
                <ItemBox title="App Development" desc="We’ll handle everything from to app development process until it is time to make your project live." icon="fa-solid fa-book-open" />
                <ItemBox title="UX Consulting" desc="A UX consultant is responsible for many of the same tasks as a UX designer, but they typically." icon="fa-solid fa-bars" />
            </div>
            <div className="h-[2px] w-[75%] my-10 mt-[5rem] mx-auto bg-[#000000]/40"></div>
        </div>);
}


const container = document.getElementById('whatIDo');
const root = ReactDOM.createRoot(container);
root.render(<WhatIDo />)