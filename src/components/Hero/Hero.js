import React from 'react';

import { Section, SectionText, SectionTitle } from '../../styles/GlobalComponents';
import Button from '../../styles/GlobalComponents/Button';
import { LeftSection } from './HeroStyles';

const Hero = (props) => (
  <>
    <Section row nopadding>
      <LeftSection>
        <SectionTitle main center>
          Welcome To <br />
          My Personal Portfolio
        </SectionTitle>
        <SectionText>
          <br />
          Specializing in custom Web-App development. If you're a business seeking a web presence or are looking to hire.
        
        </SectionText>
        <Button onClick={props.handleClick}>contact me here</Button>

    {/*     <a>https://docs.google.com/forms/d/e/1FAIpQLSegffRtV0IALtCbpEbif12GbjDZM9t1LYvoxu8sXNs35hMUfA/viewform?usp=sf_link<a/> */}
      </LeftSection>
    </Section>
  </>
);

export default Hero;