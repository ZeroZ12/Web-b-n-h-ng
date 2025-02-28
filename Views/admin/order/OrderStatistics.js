import React, { useEffect, useState } from "react";
import { Card, CardContent } from "@/components/ui/card";
import { BarChart, Bar, XAxis, YAxis, Tooltip, ResponsiveContainer } from "recharts";

export default function OrderStatistics() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch("http://yourdomain.com/api/getStatistics.php") // Thay đổi thành đường dẫn API thực tế
      .then(response => response.json())
      .then(data => setData(data))
      .catch(error => console.error("Error fetching data:", error));
  }, []);

  return (
    <div className="p-4">
      <h2 className="text-xl font-bold mb-4">Thống kê đơn hàng</h2>
      <Card>
        <CardContent className="p-4">
          <ResponsiveContainer width="100%" height={300}>
            <BarChart data={data}>
              <XAxis dataKey="name" />
              <YAxis />
              <Tooltip />
              <Bar dataKey="total" fill="#8884d8" name="Tổng giá trị đơn hàng" />
              <Bar dataKey="orders" fill="#82ca9d" name="Số lượng đơn hàng" />
              <Bar dataKey="profit" fill="#ffc658" name="Lợi nhuận gộp" />
              <Bar dataKey="revenue" fill="#ff8042" name="Doanh thu thuần" />
            </BarChart>
          </ResponsiveContainer>
        </CardContent>
      </Card>
    </div>
  );
}
