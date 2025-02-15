import React from 'react'
import Navbar from '../components/Navbar'
import {ArrowRightCircle } from 'lucide-react'
import design from '../uploads/design.jpg'
import { useNavigate } from 'react-router-dom'

const Home = () => {
  const navigate = useNavigate()

  const handleClick = () => {
    navigate('/articles')
  }

  return (
    <div className='flex flex-col'>
      <Navbar link={'home'} />
      <div className="w-full flex flex-col items-center justify-center sm:mt-2 p-3">
        <div className="w-[80%] flex flex-col md:flex-col gap-6 md:gap-8 lg:flex-row md:flex-row items-center justify-center p-4">
          <div className="lg:w-[30%] md:w-[70%] sm:w-full flex flex-col sm:gap-10 gap-6 items-start">
            <div className="text-5xl font-bold text-blue-400">CDN</div>
            <div className="text-sm font-semibold">Informez-vous et protégez-vous en ligne avec CDN, votre allié contre la cybercriminalité.</div>
            <button onClick={handleClick} className="px-3 py-4 flex flex-row items-center gap-2 text-md font-semibold rounded-lg text-white bg-blue-400 hover:border hover:border-black hover:bg-white hover:text-black transition-colors">
              <div>Commencer</div>
              <ArrowRightCircle className='h-6 w-6 inline font-foreground' />
            </button>
          </div>
          <div className="sm:w-[75%] w-full flex flex-col items-center">
            <img src={design} alt='design' className='rounded-xl w-[300px] h-[250px] sm:w-[450px] sm:h-[450px]' />
          </div>
        </div>
      </div>
    </div>

  )
}

export default Home
