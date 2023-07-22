const showcaseItems = [
{
    'title': 'Bolt Food',
    'image': './assets/images/gif/bolt_food.gif',
    'description': {
        'des_title': 'Bolt Food',
        'emoji': './assets/images/emojis/tomato.gif',
        'conclusion': 'Using Html and CSS',
    },
    'url': './pages/bolt_food/index.html',
    'github_url': false
},
{
    'title': 'Gozayaan Clone 🚀',
    'image': './assets/images/gif/gozayaan_clone.gif',
    'description': {
        'des_title': 'Gozayaan Clone',
        'emoji': './assets/images/emojis/thumbs_up.gif',
        'conclusion': 'Using HTML, CSS, Jquery',
    },
    'url': 'https://rayhanalshorif133.github.io/Gozayaan-Clone',
    'github_url': 'https://github.com/rayhanalshorif133/Gozayaan-Clone'
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
    const  { des_title,emoji,conclusion } = description;

    return (
        <div className="flex my-5 lg:my-0 flex-col items-center justify-center cursor-pointer">
            <a href={url} target="_blank" className="w-11/12 h-auto rounded-lg bg-[#212C40]">
                <div className="w-10/12 h-52 rounded-lg group cursor-pointer overflow-hidden  justify-center mx-auto mt-6">
                    <img src={image} alt={title} className="w-full h-full object-cover group-hover:scale-105 
                transition-transform duration-200 ease-in-out"/>
                </div>
                <div className="mx-6">
                    <h2 className="text-white text-[14px] font-semibold text-start pt-4 pb-2">{title}</h2>
                    <h3 className="text-[#79879C] text-[14px] font-semibold pb-2">
                        {des_title}
                        {emoji? <img src={emoji} alt="emoji" className="inline-block w-4 h-4 mx-1" /> : " "}
                        {conclusion}
                    </h3>
                </div>
            </a>
        </div>
    )
}







const container = document.getElementById('collectionOfShowcase');
const root = ReactDOM.createRoot(container);
root.render(<Index />)