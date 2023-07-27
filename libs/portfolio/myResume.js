const { useState, useContext, createContext, useEffect } = React;

const myResumeContext = createContext();

const NavItem = (props) => {
    const { title, active } = props;

    const { handleNavItemActive } = useContext(myResumeContext);

    const slug = title.toLowerCase().replace(" ", "_");

    return (
        <div className="box py-4 xl:py-5 2xl:py-6 px-6 xl:px-8 2xl:px-10 rounded-xl" onClick={() => handleNavItemActive(slug)}>
            <div className="transition-all duration-500 ease-in-out">
                <h2 className={`text-lg font-semibold ${active == true ? 'text-primary' : 'hover:text-primary text-gray-400'} font-poppins tracking-wide text-center`}>
                    {title}
                </h2>
            </div>
        </div>
    );
}

const ResumeItemBoxTitle = ({ subTitle, title }) => {
    return (<>
        <h5 className="text-primary text-sm font-semibold font-poppins">{subTitle}</h5>
        <h4 className="text-[#c4cfde] text-4xl font-semibold font-montserrat mt-2">{title}</h4>
    </>);
}

const ResumeItemBox = (props) => {
    const { title, subTitle, slug, desc } = props;
    return (
        <div className="group/item relative my-10 xl:py-0">
            <div className="box p-10 rounded-xl">
                <div className="flex justify-between">
                    <div>
                        <h2 className="font-poppins text-[24px] text-medium text-gray-300 group-hover/item:text-white">{title}</h2>
                        <h4 className="text-gray-500 group-hover/item:text-white">{subTitle}</h4>
                    </div>
                    <div className="box h-10">
                        <p className="text-primary text-sm font-bold py-2 px-5">{slug}</p>
                    </div>
                </div>
                <div className="py-5">
                    <p className="font-poppins text-lg text-gray-500 group-hover/item:text-white text-justify">{desc}</p>
                </div>
            </div>
            <div className="absolute -top-5 -left-8 h-[25rem] w-[5px] bg-[#17191C]"></div>
            <div className="absolute bg-[#17191C] top-[3rem] -left-8 h-[5px] w-[2rem]"></div>
            <div className="absolute top-10 -left-[2.3rem] bg-gray-500 group-hover/item:bg-primary h-5 w-5 rounded-full border-[4px] border-[#17191C]"></div>
        </div>);
}

const Education = () => {
    return (
        <div className="grid grid-cols-1 2xl:grid-cols-2 gap-6 h-auto py-10 xl:py-5 xl:px-[4.8rem] 2xl:px-[2rem]">
            <div className="justify-start text-start">
                <ResumeItemBoxTitle subTitle='2014 - 2021' title='Education Quality' />
                <div className="mt-10 ml-8">
                    <ResumeItemBox title="BSc in Computer Science" subTitle="University of BUBT (2017 - 2021)" slug="3.81/4" desc="The total credit hours of B.Sc. Engineering in Computer Science and Engineering degree at BUBT is 163 credits consisting of 120 theory credits and 37 lab credits and a capstone project of 6 credits." />
                </div>
            </div>
            <div className="justify-start text-start">
                <div className="2xl:mt-[6.5rem] xl:mt-0 ml-8">
                    <ResumeItemBox title="BSc in Computer Science" subTitle="University of BUBT (2017 - 2021)" slug="3.81/4" desc="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s" />
                </div>
            </div>
        </div>);
}

const ProgressBar = ({ title, percent }) => {
    return (<div className="relative pt-1">
        <div className="flex mb-2 items-center justify-between">
            <div>
                <span className="text-xs font-semibold inline-block py-1 px-2 font-montserrat  uppercase text-[#c3cedd] tracking-widest">
                    {title}
                </span>
            </div>
            <div className="text-right">
                <span className="text-xs font-semibold inline-block font-montserrat text-[#c3cedd] tracking-widest">
                    {percent}%
                </span>
            </div>
        </div>
        <div className="overflow-hidden h-2 mb-4 text-xs flex rounded bg-[#17191C]">
            <div style={{ width: `${percent}%` }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-[#6a67ce] to-[#fc636b]"></div>
        </div>
    </div>);
}

const ProfessionalSkills = () => {
    return (<div className="grid grid-cols-1 lg:grid-cols-2 gap-6 h-auto py-10 4xl:px-40">
        <div className="justify-start text-start">
            <ResumeItemBoxTitle subTitle='Features' title='Development Skill' />
            <div className="mt-10 mx-2">
                <ProgressBar title="HTML5" percent="100" />
                <ProgressBar title="CSS3" percent="85" />
                <ProgressBar title="JAVASCRIPT" percent="70" />
                <ProgressBar title="JAVASCRIPT" percent="70" />
            </div>
        </div>
        <div className="justify-start text-start">
            <ResumeItemBoxTitle subTitle='Features' title='Design Skill' />
            <div className="mt-10 mx-2">
                <ProgressBar title="HTML5" percent="100" />
                <ProgressBar title="CSS3" percent="85" />
                <ProgressBar title="JAVASCRIPT" percent="70" />
                <ProgressBar title="JAVASCRIPT" percent="70" />
            </div>
        </div>
    </div>);
}

const Experience = () => {
    return (
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-6 h-auto py-10 4xl:px-40">
            <div className="justify-start text-start">
                <ResumeItemBoxTitle subTitle='2021 - 2023' title='Job Experience' />
                <div className="mt-10 ml-8">
                    <ResumeItemBox title="B2M Technologies Ltd." subTitle="Software Developer - (Jan, 2023 - present)" slug="DHAKA" 
                    desc="B2M Technologies Ltd. Incorporated in Bangladesh is connected to all major cell phone operators, providing value added services through mobile phone network. Zing Mobile Group, Singapore is 50% owner of B2M Technologies ltd. and 50% by Axiom Technologies Ltd. Bangladesh." />
                    <ResumeItemBox title="Fashol Dotcom Limited" subTitle="Laravel Developer - (Sept, 2021 - Dec, 2022)" slug="DHAKA" desc="Fashol aims to solve ages old supply chain problems for farmers and retailers, that includes round-the-clock customer service and the fight for fair prices." />
                </div>
            </div>
            <div className="justify-start text-start">
                <ResumeItemBoxTitle subTitle='2021' title='Internship Experience' />
                <div className="mt-10 ml-8">
                    <ResumeItemBox title="Fashol Dotcom Limited" subTitle="Laravel Developer - (June, 2021 - Aug, 2021)" slug="DHAKA" desc="Fashol aims to solve ages old supply chain problems for farmers and retailers, that includes round-the-clock customer service and the fight for fair prices." />
                </div>
            </div>
        </div>
    );
}

const MyResume = () => {

    const [active, setActive] = useState({
        education: true,
        professionalSkills: false,
        experience: false
    });


    const handleNavItemActive = (title) => {
        setActive({
            education: false,
            professionalSkills: false,
            experience: false
        })
        title == 'education' && setActive({ education: true });
        title == 'professional_skills' && setActive({ professionalSkills: true });
        title == 'experience' && setActive({ experience: true });
    }


    const myResumeContextValue = { handleNavItemActive }

    return (
        <div className="flex flex-col items-center justify-center">
            <div className="py-10 mx-auto justify-center text-center" id="resume">
                <h4 className="text-primarySub font-montserrat text-sm tracking-wide font-medium py-1 justify-center text-center">1.7+ YEARS OF EXPERIENCE</h4>
                <h2 className="text-[#c4cfde] text-6xl font-bold font-montserrat tracking-wide py-5 justify-center text-center">My Resume</h2>
            </div>
            <myResumeContext.Provider value={myResumeContextValue}>
                <div className="space-y-5 lg:space-y-0 lg:flex box rounded-xl">
                    <NavItem title="Education" active={active.education} />
                    <NavItem title="Professional Skills" active={active.professionalSkills} />
                    <NavItem title="Experience" active={active.experience} />
                </div>
                <div className="2xl:px-32 3xl:px-40">
                    {active.education && <Education />}
                    {active.professionalSkills && <ProfessionalSkills />}
                    {active.experience && <Experience />}
                </div>
            </myResumeContext.Provider>
            <div className="h-[2px] w-[75%] my-10 mt-[5rem] mx-auto bg-[#000000]/40"></div>
        </div>);
}


const container = document.getElementById('myResume');
const root = ReactDOM.createRoot(container);
root.render(<MyResume />)