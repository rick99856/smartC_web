import java.io.InputStreamReader;
import java.io.BufferedReader;
import java.net.HttpURLConnection;
import java.net.URL;
public class getjson{
	public static void main(String argv[])throws Exception {
		URL url = new URL("http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AP&CaseNo2=9&FileType=1&Lang=C&FolderType=O");

		HttpURLConnection huc = (HttpURLConnection)url.openConnection();
		BufferedReader br = new BufferedReader(new InputStreamReader(huc.getInputStream(), "UTF-8"));


		String str = ""; 
		StringBuffer sb = new StringBuffer();
		
		while(null != ((str=br.readLine()))) {
			sb.append(str);
		}
		
		br.close();
		String xmlResponse = sb.toString(); 
			System.out.print(xmlResponse);
			br.close();
			huc.disconnect();

		decode(xmlResponse);
	}
	public static void decode(String st){
		// System.out.print("123456");
	}
}