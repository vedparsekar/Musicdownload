/* While it does *crash* the console while inspecting element (because of all the height and margin changes done inline on each span), there are no performance issues on user-side */


function equalizer(bar) {
  // Syntax: Math.random() * (max-min = range) + min;
  // My bars will be at least 70px, and at most 170px tall
  var height = Math.random() * 100 + 70;
  // Any timing would do the trick, mine is height times 7.5 to get a speedy yet bouncy vibe
  var timing = height * 7.5;
  // If you need to align them on a baseline, just remove this line and also the "marginTop: marg" from the "animate"
  var marg = (170 - height) / 2;
  
  bar.animate({
      height: height,
      marginTop: marg
  }, timing, function() {
      equalizer($(this));
  });
}

// Action on play-pause buttons can be added here (should be a wholesome function rather than annonymous)
$('#music-bars span').each(function(i) {
  equalizer($(this));
});