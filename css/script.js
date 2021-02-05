
// const flecheh = document.querySelector('.arrow-up');


  //    flecheh.style.position = "absolute";
     
  //    let topPos = 0;
  //    let dir = -1;

  // function hautbas(){
  //   if(topPos == 300) { dir = 1}
  //   else if (topPos == 20) { dir = -1}
  //   topPos += -2 * dir ;
  //   flecheh.style.top = `${topPos}px`;
  //   requestAnimationFrame(hautbas);
  // }

  // requestAnimationFrame(hautbas);


  const flechr = document.querySelector('.arrow-right');

  flechr.style.position = "absolute";
    
  let rightPos = 0;
  let direction = -1;

  function gauchedroite(){
    if(rightPos == 800) { direction = 1}
    else if (rightPos == 200) { direction = -1}
    rightPos += -2 * direction;
    flechr.style.right = `${rightPos}px`;
    requestAnimationFrame(gauchedroite);

  }

  requestAnimationFrame(gauchedroite);


  // const flechD = document.querySelector('.arrow-down');

  // flechD.style.position = "absolute";
    
  // let downPos =  100;
  // let directD = -1;

  // function bashaut(){
  //   if(downPos == 300) { directD = 1}
  //   else if (downPos == 20) { directD= -1}
  //   downPos += -2 * directD;
  //   flechD.style.bottom = `${downPos}px`;
  //   requestAnimationFrame(bashaut);
  // }

  // requestAnimationFrame(bashaut);



  const flechl = document.querySelector('.arrow-left');

  flechl.style.position = "absolute";
    
  let leftPos =  0;
  let dirleft = -1;

  function droitegauche(){
    if(leftPos == 800) { dirleft = 1}
    else if (leftPos == 200) { dirleft= -1}
    leftPos += -2 * dirleft;
    flechl.style.left = `${leftPos}px`;
    requestAnimationFrame(droitegauche);
  }

  requestAnimationFrame(droitegauche);
