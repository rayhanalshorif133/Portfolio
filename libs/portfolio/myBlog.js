const BlogItemBox = (props) => {
    const { title, leftSlug, rightSlug } = props;
    return (
        <div className="box h-auto w-[25rem] rounded-xl py-5 group/item">
            <div className="mt-2 mx-[2.8rem] transition-all duration-500 ease-in-out">
                <div className="justify-center w-full mx-auto overflow-hidden rounded-lg cursor-pointer h-52">
                    <img src="https://picsum.photos/200/300?random=1" alt={title} className="object-cover w-full h-full transition-transform duration-200 ease-in-out group-hover/item:scale-105" />
                </div>
                <div className="flex justify-between">
                    <h2 className="text-xs font-semibold text-primary py-5 font-poppins tracking-wide text-start">{leftSlug}</h2>
                    <h2 className="text-xs font-semibold text-white py-5 font-poppins tracking-wide text-start">
                        <i className="fa-regular fa-clock text-white"></i>
                        <span className="text-white"> {rightSlug}</span>
                    </h2>
                </div>
                <div className="my-2 flex">
                    <h2 className="text-white text-2xl fonts-montserrat font-medium text-start">{title}</h2>
                    <div className="invisible group-hover/item:visible text-start m-2">
                        <i className="fa-solid fa-arrow-right-long text-primarySub  transition-all duration-500 ease-in-out text-start fa-lg -rotate-45"></i>
                    </div>
                </div>
            </div>
        </div>
    );
}
const MyBlog = () => {
    return (
        <div class="flex flex-col items-center justify-center transition-all duration-700 ease-in-out" id="blog">
            <div class="py-10 mx-auto justify-center text-center">
                <h4
                    class="text-primarySub font-montserrat text-sm tracking-wide font-medium py-1 justify-center text-center">VISIT MY BLOG AND KEEP YOUR FEEDBACK</h4>
                <h2
                    class="text-[#c4cfde] text-6xl font-bold font-montserrat tracking-wide py-5 justify-center text-center">
                    My Blog</h2>
            </div>
            <div className="grid grid-cols-3 gap-6 h-auto justify-start py-10">
                <BlogItemBox title="Blog 1" leftSlug="GALLERY" rightSlug="4 min read" />
                <BlogItemBox title="Blog 1" leftSlug="GALLERY" rightSlug="10 min read" />
                <BlogItemBox title="Blog 1" leftSlug="GALLERY" rightSlug="10 min read" />
                <BlogItemBox title="Blog 1" leftSlug="GALLERY" rightSlug="10 min read" />
            </div>
            <div className="h-[2px] w-[75%] my-10 mt-[5rem] mx-auto bg-[#000000]/40"></div>
        </div>
    );
}

const container = document.getElementById('myBlog');
const root = ReactDOM.createRoot(container);
root.render(<MyBlog />)