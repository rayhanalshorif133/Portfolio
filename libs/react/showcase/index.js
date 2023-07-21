function Index() {

    const counter = 100;

    return (<div
        className="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 grid-flow-row gap-0 lg:gap-3 xl:gap-6 mx-5 lg:mx-2 2xl:mx-0">
        {
            Array.from(Array(counter).keys()).map((num) => {
                return <Showcase key={num} num={num} />
            })
        }
    </div>);
}

function Showcase({ num }) {

    const image = "https://picsum.photos/200/300?random=" + num;

    return (
        <div className="flex flex-col items-center justify-center cursor-pointer">
            <div className="w-11/12 h-60 rounded-lg bg-[#212C40]">
                <div className="w-10/12 h-52 rounded-lg group cursor-pointer overflow-hidden  justify-center mx-auto mt-6">
                    <img src={image} alt="showcase" className="w-full h-full object-cover group-hover:scale-105 
                transition-transform duration-200 ease-in-out"/>
                </div>
            </div>
        </div>
    )
}







const container = document.getElementById('collectionOfShowcase');
const root = ReactDOM.createRoot(container);
root.render(<Index />)