const { useState, useContext, createContext, useEffect } = React;

const myResumeContext = createContext();

const NavItem = (props) => {
    const { title, active } = props;

    const { handleNavItemActive } = useContext(myResumeContext);

    const slug = title.toLowerCase().replace(" ", "_");

    return (
        <div className="box h-[6rem] w-[15rem] rounded-xl" onClick={() => handleNavItemActive(slug)}>
            <div className="transition-all duration-500 ease-in-out">
                <h2 className={`text-lg font-semibold ${active == true ? 'text-primary' : 'hover:text-primary'} py-9 font-poppins tracking-wide text-center`}>
                    {title}
                </h2>
            </div>
        </div>
    );
}

const ResumeItemBoxTitle = ({year, title}) => {
    return (<>
        <h5 className="text-primary text-sm font-semibold font-poppins">{year}</h5>
        <h4 className="text-white text-4xl font-semibold font-montserrat mt-2">{title}</h4>
    </>);
}

const ResumeItemBox = () => {
    return (
        <div className="group/item relative my-10">
            <div className="box p-10 rounded-xl">
                <div className="flex justify-between">
                    <div>
                        <h2 className="font-poppins text-[24px] text-medium text-gray-300 group-hover/item:text-white">BSc in Computer Science</h2>
                        <h4 className="text-gray-500 group-hover/item:text-white">University of BUBT (2017 - 2021)</h4>
                    </div>
                    <div className="box h-10">
                        <p className="text-primary text-sm font-bold py-2 px-5">3.81/4</p>
                    </div>
                </div>
                <div className="py-5">
                    <p className="font-poppins text-lg text-gray-500 group-hover/item:text-white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                </div>
            </div>
            <div className="absolute -top-5 -left-8 h-[20rem] w-[5px] bg-[#17191C]"></div>
            <div className="absolute bg-[#17191C] top-[3rem] -left-8 h-[5px] w-[2rem]"></div>
            <div className="absolute top-10 -left-[2.3rem] bg-gray-500 group-hover/item:bg-primary h-5 w-5 rounded-full border-[4px] border-[#17191C]"></div>
        </div>);
}

const Education = () => {
    return (
        <div className="grid grid-cols-2 gap-6 h-auto py-10 4xl:px-40">
            <div className="justify-start text-start">
                <ResumeItemBoxTitle year='2014 - 2021' title='Education Quality'/>
                <div className="mt-10 ml-8">
                    <ResumeItemBox />
                    <ResumeItemBox />
                </div>
            </div>
            <div className="justify-start text-start">
            <ResumeItemBoxTitle year='2014 - 2021' title='Education Quality'/>
                <div className="mt-10 ml-8">
                    <ResumeItemBox />
                </div>
            </div>
        </div>);
}

const ProfessionalSkills = () => {
    return (<div>
        <h2>ProfessionalSkills</h2>
    </div>);
}

const Experience = () => {
    return (<div>
        <h2>Experience</h2>
    </div>);
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
                <div className="flex box h-[6rem] rounded-xl">
                    <NavItem title="Education" active={active.education} />
                    <NavItem title="Professional Skills" active={active.professionalSkills} />
                    <NavItem title="Experience" active={active.experience} />
                </div>
                <div className="3xl:w-[95%]">
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