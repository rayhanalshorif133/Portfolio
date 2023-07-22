const showcaseItems = [{
    'title': 'Showcase 1',
    'image': 'https://picsum.photos/200/300?random=2',
    'description': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'url': 'https://www.google.com'
},
{
    'title': 'Showcase 2',
    'image': 'https://picsum.photos/200/300?random=3',
    'description': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'url': 'https://www.google.com'
},
];


function Index() {

    return (<div
        className="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 grid-flow-row gap-0 lg:gap-3 xl:gap-6 mx-5 lg:mx-2 2xl:mx-0">
        {
            showcaseItems.map((item, index) => {
                return <Showcase key={index} item={item} />
            })
        }
    </div>);
}

function Showcase({ item }) {

    const { title,image,description,url } = item;

    return (
        <div className="flex flex-col items-center justify-center cursor-pointer">
            <a href={url} target="_blank" className="w-11/12 h-auto rounded-lg bg-[#212C40]">
                <div className="w-10/12 h-52 rounded-lg group cursor-pointer overflow-hidden  justify-center mx-auto mt-6">
                    <img src={image} alt="showcase" className="w-full h-full object-cover group-hover:scale-105 
                transition-transform duration-200 ease-in-out"/>
                </div>
                <div className="mx-6">
                    <h2 className="text-white text-[14px] font-semibold text-start pt-4 pb-2">{title}</h2>
                    <h3 className="text-[#79879C] text-[14px] font-semibold pb-2">
                        {description}
                    </h3>
                </div>
            </a>
        </div>
    )
}







const container = document.getElementById('collectionOfShowcase');
const root = ReactDOM.createRoot(container);
root.render(<Index />)