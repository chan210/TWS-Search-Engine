import java.applet.*;
import java.awt.*;

/*

<applet
code="banner"
height=300
width=500>


</applet>
*/

public class banner extends Applet implements Runnable
{
String msg1="This is a program about words replacing in FIFO loop!";
String msg=" R A C E C A R ";
Thread t=null;
int state;

boolean stopflag;

public void init()
{
setBackground(Color.yellow);
setForeground(Color.red);
setFont(new Font ("Comic Sans MS", Font.BOLD,20));
}

public void start()
{
t=new Thread(this);
stopflag=false;
t.start();
}

public void run()
{
char ch;
for(; ;)
{
try
{
repaint();
Thread.sleep(1000);
ch=msg.charAt(0);
msg=msg.substring(1,msg.length());
msg += ch;
if(stopflag)
break;
}
catch(InterruptedException e) 
{ 
}
}
}

public  void stop()
{
stopflag=true;
t=null;
}

public void paint(Graphics g)
{
g.drawString(msg1,50,50);
g.drawString(msg,200,100);
}
}