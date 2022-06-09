const getRemainingTime = deadline => {
    let now = new Date(),
        remainTime = (new Date(deadline) - now + 1000) / 1000,
        remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
        remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
        remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
        remainDays = Math.floor(remainTime / (3600 * 24));

    return {
      remainSeconds,
      remainMinutes,
      remainHours,
      remainDays,
      remainTime
    }
  };

  const countdown = (deadline,elem,finalMessage) => {
    const el = document.getElementById(elem);
    var clock = document.getElementById('clock');
    clock.style.color = 'red';
    clock.style.fontSize = '18px';
    var clock = document.getElementsByClassName('parpadea');

    const timerUpdate = setInterval( () => {
      let t = getRemainingTime(deadline);
    //   el.innerHTML = `${t.remainDays}dias:${t.remainHours}horas:${t.remainMinutes}min:${t.remainSeconds}seg`;
      el.innerHTML = `${t.remainHours} horas ${t.remainMinutes} min ${t.remainSeconds} seg`;

      if(t.remainTime <= 1) {
        clearInterval(timerUpdate);
        el.innerHTML = finalMessage;
      }

    }, 1000)
  };

// countdown('Jun 04 2022 14:10:21 GMT-0500', 'clock', '¡En procesos de subida de actualización!');
// countdown('Jun 03 2022 15:00:10GMT-0500', 'clock', '');
