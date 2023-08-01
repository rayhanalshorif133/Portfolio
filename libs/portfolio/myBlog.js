const BlogItemBox = (props) => {
    const { title, leftSlug, rightSlug } = props;
    return (
        <div className="w-full h-auto py-5 box rounded-xl group/item">
            <div className="mt-2 mx-[2.8rem] transition-all duration-500 ease-in-out">
                <div className="justify-center w-full mx-auto overflow-hidden rounded-lg cursor-pointer h-52">
                    <img src="https://picsum.photos/200/300?random=1" alt={title} className="object-cover w-full h-full transition-transform duration-200 ease-in-out group-hover/item:scale-105" />
                </div>
                <div className="flex justify-between">
                    <h2 className="py-5 text-xs font-semibold tracking-wide text-primary font-poppins text-start">{leftSlug}</h2>
                    <h2 className="py-5 text-xs font-semibold tracking-wide text-white font-poppins text-start">
                        <i className="text-white fa-regular fa-clock"></i>
                        <span className="text-white"> {rightSlug}</span>
                    </h2>
                </div>
                <div className="flex my-2">
                    <h2 className="text-2xl font-medium text-white fonts-montserrat text-start">{title}</h2>
                    <div className="invisible m-2 group-hover/item:visible text-start">
                        <i className="transition-all duration-500 ease-in-out -rotate-45 fa-solid fa-arrow-right-long text-primarySub text-start fa-lg"></i>
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
                <TitleAndSlug title=' My Blog' slug={'VISIT MY BLOG AND KEEP YOUR FEEDBACK'}/>
            </div>
            <div className="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-6 h-auto py-10 w-full px-[2rem] px-[2rem] lg:px-[5rem] xl:px-[4.3rem]  xl:py-5 2xl:px-32 3xl:px-[11.5rem]">
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