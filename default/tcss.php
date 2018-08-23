@import "compass/css3";

// More practical CSS...
// using mobile first method (IE8,7 requires respond.js polyfill https://github.com/scottjehl/Respond)

$breakpoint-alpha: 480px; // adjust to your needs

.rwd-table {
  margin: 1em 0;
  min-width: 300px; // adjust to your needs
  
  tr {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    display: none; // for accessibility, use a visually hidden method here instead! Thanks, reddit!   
  }
  
  td {
    display: block; 
    
    &:first-child {
      padding-top: .5em;
    }
    &:last-child {
      padding-bottom: .5em;
    }

    &:before {
      content: attr(data-th)": "; // who knew you could do this? The internet, that's who.
      font-weight: bold;

      // optional stuff to make it look nicer
      width: 6.5em; // magic number :( adjust according to your own content
      display: inline-block;
      // end options
      
      @media (min-width: $breakpoint-alpha) {
        display: none;
      }
    }
  }
  
  th, td {
    text-align: left;
    
    @media (min-width: $breakpoint-alpha) {
      display: table-cell;
      padding: .25em .5em;
      
      &:first-child {
        padding-left: 0;
      }
      
      &:last-child {
        padding-right: 0;
      }
    }

  }
  
  
}


// presentational styling

@import 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700';

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #eee;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
  tr {
    border-color: lighten(#34495E, 10%);
  }
  th, td {
    margin: .5em 1em;
    @media (min-width: $breakpoint-alpha) { 
      padding: 1em !important; 
    }
  }
  th, td:before {
    color: #dd5;
  }
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  src: local('Montserrat Light'), local('Montserrat-Light'), url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE_oTkEokFSrSpvYSpZOeZRs.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  src: local('Montserrat Light'), local('Montserrat-Light'), url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE0_0lycXMw8PhobHtu2Qgco.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  src: local('Montserrat Light'), local('Montserrat-Light'), url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE8u2Q0OS-KeTAWjgkS85mDg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v10/SKK6Nusyv8QPNMtI4j9J2yEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v10/gFXtEMCp1m_YzxsBpKl68iEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v10/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fcjh33M2A-6X0bdu871ruAGs.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fchHJTnCUrjaAm2S9z52xC3Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}